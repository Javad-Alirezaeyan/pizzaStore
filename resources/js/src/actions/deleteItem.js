import {DELETE_ITEM} from "../helper/constants";

const deleteItem = index => ({
    type : DELETE_ITEM,
    index : index
})

export default deleteItem