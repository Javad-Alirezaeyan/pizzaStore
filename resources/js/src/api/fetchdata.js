import fetchProductsSuccess from "../actions/cartActions";


function fetchProducts() {


    return dispatch=> {
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
               // console.log("product", data.itemList);
                dispatch(fetchProductsSuccess(data.itemList));
                return data.itemList;
            }
        )
            .then(function(data){
                // /console.log(data)
            });
    }


}

export default fetchProducts;