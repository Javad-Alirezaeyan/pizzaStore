const initialState = {
    menuList : [

        {'id': 1, 'title' : 'Pepperoni Pizza', 'image': 'images/pizza.jpg', 'price':9,
        'detail': 'this is one of the best pizza in Europa This is one of the best pizza in Europa This is one of the best pizza in Europa'  },
        {'id': 2, 'title' : ' Pizza', 'image': 'images/pizza.jpg', 'price':20,
            'detail': 'this is one of the best pizza in Europa This is one of the best pizza in Europa This is one of the best pizza in Europa'  },
        {'id': 3, 'title' : ' Pizza', 'image': 'images/pizza.jpg', 'price':30,
            'detail': 'this is one of the best pizza in Europa This is one of the best pizza in Europa This is one of the best pizza in Europa'  },
        {'id': 4, 'title' : ' Pizza', 'image': 'images/pizza.jpg', 'price':40,
            'detail': 'this is one of the best pizza in Europa This is one of the best pizza in Europa This is one of the best pizza in Europa'  },
        {'id': 5, 'title' : ' Pizza', 'image': 'images/pizza.jpg', 'price':50,
            'detail': 'this is one of the best pizza in Europa This is one of the best pizza in Europa This is one of the best pizza in Europa'  },
        {'id': 6, 'title' : ' Pizza', 'image': 'images/pizza.jpg', 'price':70,
            'detail': 'this is one of the best pizza in Europa This is one of the best pizza in Europa This is one of the best pizza in Europa'  },
        {'id': 7, 'title' : ' Pizza', 'image': 'images/pizza.jpg', 'price':80,
            'detail': 'this is one of the best pizza in Europa This is one of the best pizza in Europa This is one of the best pizza in Europa'  },
        {'id': 8, 'title' : ' Pizza', 'image': 'images/pizza.jpg', 'price':90,
            'detail': 'this is one of the best pizza in Europa This is one of the best pizza in Europa This is one of the best pizza in Europa'  }

        ]
}

function cartReducer (state = initialState , action){
    switch (action.type) {
        default : return state;

    }
}


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


async function loadItems(){

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

return loadedList;*!/
}*/

export default cartReducer