import React from 'react';

export default class StoreAddress extends React.Component{

    constructor(props){
        super(props)
    }

    render(){
        return (
            <address>
                <h3>To,</h3>
                <h4 className="font-bold">Gaala & Sons,</h4>
                <p className="text-muted m-l-30">E 104, Dharti-2,
                    <br/> Nr' Viswakarma Temple,
                    <br/> Talaja Road,
                    <br/> Bhavnagar - 364002</p>
                <p className="m-t-30"><b>Invoice Date :</b> <i className="fa fa-calendar"></i> 23rd Jan 2017</p>
                <p><b>Due Date :</b> <i className="fa fa-calendar"></i> 25th Jan 2017</p>
            </address>
        )
    }

}