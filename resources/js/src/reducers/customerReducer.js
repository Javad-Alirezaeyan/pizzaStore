import {SET_IINFO} from "../helper/constants";

const initialState = {
    address: "",
    firstName:"",
    lastName:"",
    phoneNumber: ""
}

function ccustomerReducer (state = initialState , action){
    switch (action.type) {
        case SET_IINFO:

            let item = action.item;
            return {
                ...state,
                address: item.address,
                firstName: item.firstName,
                lastName: item.address,
                counter: item.phoneNumber,
            }
        default : return state;

    }
}


export default ccustomerReducer