import React, {Component} from 'react';
import ReactDom from 'react-dom';
import FoodMenu from "./components/FoodMenu";
import Cart from "./components/Cart";
import Invoice from "./components/Invoice";
import { Provider} from "react-redux";
import store from './store/store'
import CustomerForm from "./components/CustomerForm";
import {HAMBURGER_ID, PIZZA_ID, SODA_ID} from "./helper/constants";




if (document.getElementById("cart")){
   ReactDom.render(<Provider store={store}> <Cart  /></Provider>, document.getElementById("cart"));
}

if (document.getElementById("Menu")){
    ReactDom.render(<Provider store={store}> <FoodMenu   /></Provider>, document.getElementById("Menu"));
  //  ReactDom.render(<Provider store={store}> <FoodMenu type={HAMBURGER_ID}  /></Provider>, document.getElementById("hamburger"));
   // ReactDom.render(<Provider store={store}> <FoodMenu  type={SODA_ID}   /></Provider>, document.getElementById("soda"));
}

if (document.getElementById("cart2")){
    ReactDom.render(<Provider store={store}> <Cart  /></Provider>, document.getElementById("cart2"));
    ReactDom.render(<Provider store={store}><Invoice /> </Provider>, document.getElementById("invoice"));
    ReactDom.render(<Provider store={store}><CustomerForm /> </Provider>, document.getElementById("customerInfoForm"));
}




