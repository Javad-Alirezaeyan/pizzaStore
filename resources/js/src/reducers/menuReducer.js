import {FETCH_PRODUCTS_PENDING, FETCH_PRODUCTS_SUCCESS, FETCH_PRODUCTS_ERROR} from './../actions/cartActions';

const initialState = {
    menuList : [ ],
    products: []
}

function cartReducer (state = initialState , action){
    switch (action.type) {

        case FETCH_PRODUCTS_SUCCESS:
           /* let items = [...(state.products)];
            console.log("FETCH_PRODUCTS_SUCCESS", action.products);*/
            return {...state,  products: action.products}
           /*return {
                ...state,
                pending: false,
                products: action.products
            }*/

        default : return state;

    }
}
export const getProducts = state => state.products;

/*
const initialState = {
menuList : loadItems()
}

 function cartReducer (state = initialState , action){
switch (action.type) {
 case 'RESPONSE':
  return {
   ...state,
   menuList: action.result,
  };
default : return state;

}
}
*/

/*async function loadItems(){

 let response = await fetch('/getItems');
 let data = await response.json()
  //   console.log("data:", data);
 return data['itemList'];
/!*
var loadedList =[] ;
fetch("/getItems", {
method: "get",
headers: {
'Accept': 'application/json',
'Content-Type': 'application/json',
}
})
.then(function(response){
return response.json();
}).then(data => {
loadedList = data['itemList'];
return loadedList;
}
)
.then(function(data){
console.log(data)
});


}*/

export default cartReducer