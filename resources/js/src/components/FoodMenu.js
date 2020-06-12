import React, {Component} from 'react';
import FoodItem from "./Item";

import { connect } from 'react-redux';


const mapStateToProps = (state) =>{
    return{
        menuList : state.menu.menuList
    }
}


 class FoodMenu extends React.Component {
    constructor(props) {
        super(props);
    }



    render() {
        let i = 0;
        const htmlItemsList = this.props.menuList.map((item) =>{
            return <div key={i++} className="col-lg-3 col-md-6">
                <FoodItem item={item} />
            </div>;
        });
        return(
            <div className="row el-element-overlay">
                <div className="col-md-12">
                    <h4 className="card-title">Pizza Menu</h4>
                    <h6 className="card-subtitle m-b-20 text-muted">Order your favorite pizza</h6></div>
                <>
                    { htmlItemsList }
                </>

            </div>
        )
    }
}

export default connect (mapStateToProps)(FoodMenu)