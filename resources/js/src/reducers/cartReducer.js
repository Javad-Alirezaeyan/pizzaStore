import {ADD_COUNTER, ADD_ITEM, DELETE_ITEM} from "../helper/constants";

const initialState = {
    items : loadOfCoockie()
}

function cartReducer (state = initialState , action){
    switch (action.type) {

        case  ADD_ITEM :
            let item = action.value;
            let index = existItem(state, item);
            let itemsList = [...(state.items)];//state.items;
            if (index !== false) {
                itemsList[index]['count'] =  parseInt(itemsList[index]['count']) + parseInt(item['count']);
            } else {
                itemsList.push(item);
            }

            setCookie("Cart", JSON.stringify(itemsList), 1);
            return  Object.assign( {}, state, {
            items : itemsList
        })

        case ADD_COUNTER :
            let items = [...(state.items)];
            items[action.item.index]['count'] = action.item.count;
            setCookie("Cart", JSON.stringify(items), 1);
            let res = {...state, items: items}
            return res

        case DELETE_ITEM :
            items = [...(state.items)];
            items.splice(action.index, 1);
            console.log("items", items);
            setCookie("Cart", JSON.stringify(items), 1);
            return  Object.assign( {}, state, {
                items : items
            })


        case 'GET_ITEM' : return  state.items

        default : return state;

    }
}


function loadOfCoockie(){
    let jsonItemsList = getCookie("Cart");
    let itemsList = [];
    try {
        if (jsonItemsList != "" ){
            itemsList = JSON.parse(jsonItemsList);
        }
    }
    catch(err) {
        itemsList = [];
        console.log("warning", "a problem in cookie");
    }
    return itemsList;
}

function  existItem(state, item) {
    let itemsList = state.items;
    for (let i = 0; i < itemsList.length; i++) {

        if (itemsList[i]['id'] == item['id']) {
            return i;
        }
    }
    return false;
}

export default cartReducer