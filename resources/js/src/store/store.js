import {createStore,applyMiddleware, combineReducers} from 'redux';
import cartReducer from './../reducers/cartReducer';
import thunk from 'redux-thunk';
import menuReducer from './../reducers/menuReducer';
import customerReducer from "../reducers/customerReducer";

const reducers = {
    list: cartReducer,
    menu: menuReducer,
    customerInfo: customerReducer
}

const middlewares = [thunk];

const store = createStore( combineReducers(reducers),    applyMiddleware(...middlewares));
export default store

//window.__REDUX_DEVTOOLS_EXTENSION__ && window.__REDUX_DEVTOOLS_EXTENSION__() ,