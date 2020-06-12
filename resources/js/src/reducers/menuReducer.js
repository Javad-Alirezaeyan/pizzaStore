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


export default cartReducer