import React from 'react';
import { connect } from 'react-redux';
import {PriceInput} from "./style";
import setCustomerInfo from "../actions/setCustomerInfo";


const mapStateToProps = (state) =>{
    return{
        firstName : state.customerInfo.firstName,
        lastName : state.customerInfo.lastName,
        address : state.customerInfo.address,
        phoneNumber : state.customerInfo.phoneNumber,
    }
}

const mapDispatchToProps = dispatch => ({
    setCustomerInfo : function(info) {
        return dispatch(setCustomerInfo(info))
    }
})


/**
 * This component renders a form to receive the information of customer when they want to register an order
 * this component is connected to the store
 */
class CustomerForm extends React.Component{

    constructor(props){
        super(props)

        this.firstName =  React.createRef();
        this.lastName = React.createRef();
        this.address = React.createRef();
        this.phoneNumber = React.createRef();

        this.setCustomerInfo = this.setCustomerInfo.bind(this)
    }

     setCustomerInfo(){
        this.props.setCustomerInfo(
            {
                'firstName': this.firstName.current.value,
                'lastName': this.lastName.current.value,
                'address': this.address.current.value,
                'phoneNumber': this.phoneNumber.current.value,
            }
        );
    }

    render(){
        return (
           <div>
               <div className="row">
                   <div className="col-md-6">
                       <div className="form-group">
                           <label htmlFor="firstName"> First Name : <span className="danger">*</span> </label>
                           <input type="text"  className="form-control required" id="firstName" name="firstName"
                                  ref={this.firstName}
                                  onBlur={this.setCustomerInfo}
                                 defaultValue ={this.props.firstName}
                           /></div>
                   </div>
                   <div className="col-md-6">
                       <div className="form-group">
                           <label htmlFor="lastName"> Last Name : <span className="danger">*</span> </label>
                           <input type="text" className="form-control required" id="lastName" name="lastName"
                                  ref={this.lastName}
                                  onBlur={this.setCustomerInfo}
                                  defaultValue ={this.props.lastName}
                           /></div>
                   </div>
               </div>
               <div className="row">
                   <div className="col-md-6">
                       <div className="form-group">
                           <label htmlFor="address"> Address : <span className="danger">*</span> </label>
                           <input type="text" className="form-control required" id="address" name="address"
                                  ref={this.address}
                                  onBlur={this.setCustomerInfo}
                                  defaultValue ={this.props.address}

                           /></div>
                   </div>
                   <div className="col-md-6">
                       <div className="form-group">
                           <label htmlFor="phoneNumber">Phone Number :</label>
                           <input type="text" className="form-control" name="phoneNumber" id="phoneNumber"
                                  ref={this.phoneNumber}
                                  onBlur={this.setCustomerInfo}
                                  defaultValue ={this.props.phoneNumber}
                           /></div>
                   </div>
               </div>
           </div>
        )
    }

}

export default connect (mapStateToProps, mapDispatchToProps)(CustomerForm)