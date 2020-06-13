import React from 'react';
import { connect } from 'react-redux';
import {PriceInput} from "./style";


const mapStateToProps = (state) =>{
    return{
        firstName : state.customerInfo.firstName,
        lastName : state.customerInfo.lastName,
        address : state.customerInfo.address,
        phoneNumber : state.customerInfo.phoneNumber,
    }
}



class CustomerForm extends React.Component{

    constructor(props){
        super(props)

        this.firstName = this.props.firstName;
        this.lastName = this.props.lastName;
        this.address = this.props.address;
        this.phoneNumber = this.props.phoneNumber;
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
                                 defaultValue ={this.props.firstName}
                           /></div>
                   </div>
                   <div className="col-md-6">
                       <div className="form-group">
                           <label htmlFor="lastName"> Last Name : <span className="danger">*</span> </label>
                           <input type="text" className="form-control required" id="lastName" name="lastName"
                                  ref={this.firstName}
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
                                  defaultValue ={this.props.address}

                           /></div>
                   </div>
                   <div className="col-md-6">
                       <div className="form-group">
                           <label htmlFor="phoneNumber">Phone Number :</label>
                           <input type="text" className="form-control" name="phoneNumber" id="phoneNumber"
                                  ref={this.phoneNumber}
                                  defaultValue ={this.props.phoneNumber}
                           /></div>
                   </div>
               </div>
           </div>
        )
    }

}

export default connect (mapStateToProps)(CustomerForm)