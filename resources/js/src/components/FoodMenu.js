import React, {Component} from 'react';
import {bindActionCreators} from 'redux';
import {connect} from 'react-redux';
import {getProducts} from "../reducers/menuReducer";
import fetchProducts from './../api/fetchdata';
import TabFoodMenu from "./TabFoodMenu";


const mapStateToProps = (state) => {

    return {
        menuList: state.menu.menuList,
        product2: state.menu.products,
        products: getProducts(state),
    }
}

const mapDispatchToProps = dispatch => bindActionCreators({
    fetchProducts: fetchProducts
}, dispatch)


class FoodMenu extends React.Component {
    constructor(props) {
        super(props);
    }


    componentWillMount() {
        const {fetchProducts} = this.props;
        fetchProducts();
    }


    render() {

        let list = this.props.product2;
        console.log("items:", this.props.product2);
        let i = 0;
        let j = 0;
        var menuTitle = "";
        var sectionItemsFood = "";
        if (list.length > 0) {
            console.log("items:", (list[1]));
            menuTitle = list.map((item) => {
                let active = i==0 ? "active" : "";
                return <li key={"li" + (i++)} className="nav-item">
                          <a className={"nav-link "+ active}  data-toggle="tab" href={"#" + item.itemTitle + "Tab"}
                             role="tab">{item.itemTitle}
                          </a>
                       </li>;
            });

            sectionItemsFood = list.map((item) => {
                let active = j==0 ? "active" : "";
                return <div key={"tab" + (j++)} className={"tab-pane "+ active} id={item.itemTitle + "Tab"} role="tabpanel">
                    <div className="card-block ">
                        <TabFoodMenu title={item.itemTitle} list={item.list}/>
                    </div>
                </div>;
            });

        }


        return (
            <>
                <ul className="nav nav-tabs profile-tab" role="tablist">
                    {menuTitle}
                </ul>
                <div className="tab-content">
                    {sectionItemsFood}
                </div>
            </>
        )
    }
}

export default connect(mapStateToProps, mapDispatchToProps)(FoodMenu)