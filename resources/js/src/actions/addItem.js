import {ADD_ITEM} from "../helper/constants";

const addItem = value => ({
    type : ADD_ITEM,
    value : value
})

export default addItem