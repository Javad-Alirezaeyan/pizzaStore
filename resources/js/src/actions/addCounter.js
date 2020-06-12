import {ADD_COUNTER} from "../helper/constants";

const addCounter = item => ({
    type : ADD_COUNTER,
    item : item
})

export default addCounter