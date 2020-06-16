import React from 'react';
import {PriceInput} from "./style";


import { connect } from 'react-redux';
import addCounter  from './../actions/addCounter'
import deleteItem  from './../actions/deleteItem'


const mapStateToProps = (state) =>{
    return{
        items : state.list.items
    }
}

/**
 * mapping two functions to the Cart components
 */
const mapDispatchToProps = dispatch => ({
    deleteItem : function(index) {
        return dispatch(deleteItem(index))
    },
    addCounter : function (item) {
        return dispatch(addCounter(item))
    }

})


/**
 * this components creates an interface to show the selected items by the customer. This component has been used in
 * different parts of the application. Also this component is connected to the store
 */
class Cart extends React.Component {

    constructor(props) {
        super(props);

        this.finalPrice = 0;
        this.state = {
            items: this.props.items,
        };

        this.count = React.createRef();
        //bind functions
        this.countItemChange = this.countItemChange.bind(this);
        this.deleteItem = this.deleteItem.bind(this);
    }


    /**
     * when the customer clicks on the 'Delete' button, this method will be called. This method then calls a method
     * that is also called deleteItem in the 'cartreducer'
     */
    deleteItem(index) {
        //calling a method from the cartReducer
        this.props.deleteItem(index)
        this.setState({
            items: this.props.items,
        })
    }

    /**
     *  when the customer changes the count of ordered item, this method will be called. This method then calls a method
     * that is also called addCounter in the 'cartreducer'
     */
    countItemChange(e, index) {

        this.props.addCounter({'count': e.target.value , 'index': index});
    }

    /**
     * To cretae a row in the table of the basket
     */
    createTr(item, index) {

        let sumPrice = item.price * item.count;
        this.finalPrice += sumPrice;

        return (
            <tr key={index}>
                <td>{index}</td>
                <td>
                    <img src={item.image} alt="user" width="40"
                         className="img-container"/>
                    {item.title}
                </td>
                <td>
                    <div className="form-group row">
                        <div className="col-10">
                            <PriceInput className="form-control" type="number"
                                        ref={this.count}
                                        value={item.count}
                                        onChange={(e) => {
                                            this.countItemChange(e, index - 1)
                                        }}
                                        id="example-number-input"/>
                        </div>
                    </div>
                </td>
                <td>{item.price}</td>
                <td>{sumPrice}</td>
                <td>
                    <button type="button" className="btn btn-danger"
                            onClick={(e) => {
                                this.deleteItem( index-1)
                            }}>
                        <i className="fa fa-close"></i> Delete
                    </button>
                </td>
            </tr>);
    }

    componentDidMount() {
    }

    render() {
        let i = 1;
        this.finalPrice = 0;
        // this.props.items returns the list of items in the store
        let trs = this.props.items.map((item) => {
                return this.createTr(item, i++)
            }
        );

        return (
            <div className="card">
                <div className="card-block">
                    <h4 className="card-title">Selected Items</h4>
                    <div className="table-responsive">
                        <table className="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Quantity</th>
                                <th>Unit Price</th>
                                <th>Total</th>
                                <th>Operation</th>
                            </tr>
                            </thead>
                            <tbody>
                            {trs}
                            </tbody>
                        </table>
                    </div>
                    <div className="col-md-12">
                        <div className="left m-t-30 text-right">
                            <hr/>
                            <h3><b>Total:</b> $ {this.finalPrice} </h3>
                        </div>
                    </div>
                </div>

            </div>
        );

    }
}

//mapping the defined functions to the components
export default connect (mapStateToProps, mapDispatchToProps)(Cart)