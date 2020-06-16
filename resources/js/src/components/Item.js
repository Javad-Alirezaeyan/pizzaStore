import React from 'react';
import {PriceSign} from  "./style";
import { connect } from 'react-redux';
import addItem from './../actions/addItem'

const mapStateToProps = state =>({
    items : state.list.items,
})

const mapDispatchToProps = dispatch => ({
    addItem : function(value) {
        return dispatch(addItem(value))
    }
})


/**
 * 'Item' component renders an items, it cill be called a lot in the FoodMenu
 */
class Item extends React.Component {

    constructor(props) {
        super(props);

        this.count = React.createRef();
        this.addToCart = this.addToCart.bind(this);
    }

    addToCart(){
        let item =  this.props.item;
        item['count'] = this.count.current.value;
        this.props.addItem(item);
    }
    render() {

        let item = this.props.item;
        return (
            <div className="card">
                <div className="el-card-item">
                    <div className="el-card-avatar el-overlay-1">
                        <img src={item.image} style={{height : "300px"}} alt="user"/>
                        <div className="el-overlay">
                            <ul className="el-info">
                                <li>
                                    <div className="form-group row">
                                        <div className="col-10">
                                            <input className="form-control" type="number"
                                                   ref={this.count}
                                                   defaultValue="1"
                                                   min={1}
                                                   max={50}
                                                   id="example-number-input"/>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <button type="button" className="btn btn-danger" onClick={this.addToCart}>
                                        <i className="fa fa-cart-plus"></i> Add to cart
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div className=" pricing-box el-card-content">
                        <h3 className="box-title ">{ item.title}</h3>
                        <h2  className="text-center pricing-header" >${item.price}</h2>
                        <br/>
                        <div>{item.description}</div>
                    </div>
                </div>
            </div>

        )
    }

}

export default connect (mapStateToProps, mapDispatchToProps)(Item)