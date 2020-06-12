import {createStore, combineReducers} from 'redux';
import cartReducer from './../reducers/cartReducer';
import menuReducer from './../reducers/menuReducer';
import customerReducer from "../reducers/customerReducer";

const reducers = {
    list: cartReducer,
    menu: menuReducer,
    customerInfo: customerReducer
}

const store = createStore( combineReducers(reducers),   window.__REDUX_DEVTOOLS_EXTENSION__ && window.__REDUX_DEVTOOLS_EXTENSION__() );
export default store