import React from 'react';
import {PriceInput} from "./style";
import {DeliveryPrice} from "../helper/constants";
import { connect } from 'react-redux';
import addItem from "../actions/addItem";


const mapStateToProps = (state) =>{
    return{
        items : state.list.items,
        customerInfo : state.customerInfo
    }
}


class InvoiceGoodsList extends React.Component {
    constructor(props) {
        super(props);
        this.totalPrice = 0;
        this.finalPrice = 0;
        this.deliveryPrice = DeliveryPrice;
        this.state = {
        };

        this.submitOrder = this.submitOrder.bind(this);
    }

    submitOrder(){
        let info = this.props.customerInfo;
        var data = {
            "list": this.props.items,
            "firstName":  info.firstName,
            "lastName": info.lastName,
            "address": info.address,
            "phoneNumber": info.phoneNumber,
        }
        fetch("saveOrder", {
            method: "POST",
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            body:  JSON.stringify(data)
        })
            .then(function(response){
                return response.json();
            }).then(data => {
               console.log("data", data);
            }
        )
            .then(function(data){
                console.log(data)
            });
    }

    createTr(item, index) {

        let sumPrice = item.price * item.count;
        this.totalPrice += sumPrice;

        return (
            <tr key={index}>
                <td>{index}</td>
                <td>
                    <img src={item.image} alt="user" width="40"
                         className="img-container"/>
                    {item.title}
                </td>
                <td>{item.count}</td>
                <td>{item.price}</td>
                <td>{sumPrice}</td>
            </tr>);
    }

    componentDidMount() {

    }


    render() {
        let i = 1;
        this.totalPrice = 0;
        let trs = this.props.items.map((item) => {
                return this.createTr(item, i++)
            }
        );
        this.finalPrice = this.totalPrice + this.deliveryPrice;

        return (
           <div>
               <div className="table-responsive">
                   <table className="table">
                       <thead>
                       <tr>
                           <th>#</th>
                           <th>Title</th>
                           <th>Quantity</th>
                           <th>Unit Price</th>
                           <th>Total</th>
                       </tr>
                       </thead>
                       <tbody>
                       {trs}
                       </tbody>
                   </table>
               </div>
               <div className="col-md-12">
                   <div className="pull-right m-t-30 text-right">
                       <p>Sub - Total amount: ${this.totalPrice}</p>
                       <p>Delivery Price : ${this.deliveryPrice} </p>
                       <hr/>
                           <h3><b>Total :</b> ${this.finalPrice}</h3>
                   </div>
                   <div className="clearfix"></div>
                   <hr/>

                   <button onClick={()=>this.submitOrder()} >Submit</button>
               </div>
           </div>
        );

    }
}

export default connect (mapStateToProps)(InvoiceGoodsList)