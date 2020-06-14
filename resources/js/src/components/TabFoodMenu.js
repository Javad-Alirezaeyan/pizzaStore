import React, {Component} from 'react';
import FoodItem from "./Item";



class TabFoodMenu extends React.Component {
    constructor(props) {
        super(props);
    }



    render() {

        let list = this.props.list;
        console.log("items22:", this.props.list);
        let i = 0;

        var htmlItemsList = "";
        if (list.length > 0){
            htmlItemsList = list.map((item) =>{
                return <div key={i++} className="col-lg-3 col-md-6">
                    <FoodItem item={item} />
                </div>;
            });
        }

        return(
            <div className="row el-element-overlay">
                <div className="col-md-12">
                    <h4 className="card-title">{this.props.title} Menu</h4>
                    <h6 className="card-subtitle m-b-20 text-muted">Order your favorite {this.props.title}</h6></div>
                <>
                    { htmlItemsList }
                </>

            </div>
        )
    }
}

export default TabFoodMenu;