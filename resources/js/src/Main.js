import React, {Component} from 'react';
import ReactDom from 'react-dom';
import FoodMenu from "./components/FoodMenu";
import Cart from "./components/Cart";
import Invoice from "./components/Invoice";
import { Provider} from "react-redux";
import store from './store/store'
import CustomerForm from "./components/CustomerForm";


var CartComponent;

if (document.getElementById("cart")){




    ReactDom.render(<Provider store={store}> <Cart  /></Provider>, document.getElementById("cart"));
    //CartComponent = ReactDom.render(<Cart itemsList={itemsList}/>, document.getElementById("cart"));
    if (document.getElementById("cart2")){
        ReactDom.render(<Provider store={store}> <Cart  /></Provider>, document.getElementById("cart2"));
        ReactDom.render(<Provider store={store}><Invoice /> </Provider>, document.getElementById("invoice"));
        ReactDom.render(<CustomerForm store={store}><Invoice /> </CustomerForm>, document.getElementById("customerInfoForm"));
    }



}

if (document.getElementById("foodMenu")){
    ReactDom.render(<Provider store={store}> <FoodMenu  /></Provider>, document.getElementById("foodMenu"));
}


