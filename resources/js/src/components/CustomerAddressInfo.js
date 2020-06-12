import React from 'react';

import { connect } from 'react-redux';


const mapStateToProps = (state) =>{
    return{
        firstName : state.customerInfo.firstName,
        lastName : state.customerInfo.lastName,
        address : state.customerInfo.address,
        phoneNumber : state.customerInfo.phoneNumber,
    }
}

 class CustomerAddressInfo extends React.Component{


    render(){
        return(
            <address>
                <h3> &nbsp;<b className="text-danger">Monster Admin</b></h3>
                <p className="text-muted m-l-5">E 104, Dharti-2,
                    <br/> {this.props.firstName}  {this.props.lastName},
                    <br/> {this.props.phoneNumber},
                    <br/> {this.props.address}</p>
            </address>
        )
    }
}

export default connect (mapStateToProps)(CustomerAddressInfo)