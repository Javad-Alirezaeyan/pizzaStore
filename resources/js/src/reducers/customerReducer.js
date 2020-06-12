import {SET_IINFO} from "../helper/constants";

const initialState = {
    address: "test",
    firstName:"test",
    lastName:"test",
    phoneNumber: "test"
}

function ccustomerReducer (state = initialState , action){
    switch (action.type) {
        case SET_IINFO:
            return {
                ...state,
                address: action.address,
                firstName: action.firstName,
                lastName: action.address,
                counter: action.phoneNumber,
            }
        default : return state;

    }
}


export default ccustomerReducer