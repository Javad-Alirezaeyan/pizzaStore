import React from 'react';
import CustomerAddressInfo from "./CustomerAddressInfo";
import StoreAddress from "./StoreAddress";
import InvoiceGoodsList from "./InvoiceGoodsList";


import { connect } from 'react-redux';


const mapStateToProps = state =>({
    items : state.list.items
})

/**
 * To show invoice
 * this component takes the all information  from the  store
 */
 class Invoice extends React.Component{

    constructor(props){
        super(props)
    }

    render() {
        return(
            <div className="row">
                <div className="col-md-12">
                    <div className="card card-block printableArea">
                        <h3><b>INVOICE</b> <span className="pull-right">factor Id:</span></h3>
                        <hr/>
                        <div className="row">
                            <div className="col-md-12">

                                <div className="pull-left">
                                    <CustomerAddressInfo/>

                                </div>
                                <div className="pull-right text-right">


                                </div>
                            </div>
                            <div className="col-md-12">
                                <InvoiceGoodsList />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        )
    }
}

export default connect (mapStateToProps)(Invoice)