## Pizza store
A simple web application to order pizza or other type of fast foods and soda.
Introduction
This application provides you a space that you can choose your favorite items (pizza, Hamburger,
soda,…) and add them to the basket. After that you can order with inserting the customer information
including name, address, phone, etc. There are some screenshots of the application in the end of this
text, also you can find the project here. Let me explain you some futures of the application:
<ul>
<li>Majority of parts in the frond-end has been implemented as a component with React
    technology. For example cart, invoice, Item, Food Menu, etc.</li>
<li>Implementing a main store to keep data in the front-end makes the project flexible and all parts
    use the same data. Some different parts have been implemented to view the items that a
    customer has added to the basket, for example with clicking on the basket icon on the left side
    of header, basket page, and the invoice part. So they will be synchronized automatically
    (implemented by Redux)</li>
<li>You can change your basket information before submitting an order. To add an item to the
    basket, move the mouce over the button image showing a Add button and an input. Also you
    can change the count of the added item or delete it.
     There are a FoodMenu that shows the items in a special tab. For example pizza is displayed in
    the pizza tab.</li>
<li></li>
</ul>

## Technical
Used techniques are presented in the following:
Language:
<ul>
 <li> PHP 7.4</li>
 <li>CSS3</li>
 <li>JS</li>
 <li>HTML5</li>
</ul>
Framework and Library:
<ul>
 <li>Laravel version 7.*</li>
 <li>React</li>
 <li>Redux</li>
 <li>Jquery</li>
</ul>

tools:
<ul>
 <li>Docker</li>
 <li>Compose</li>
 <li>Git</li>
</ul>

Other:
<ul>
 <li>PHPUnit</li>
 <li>Object orinted</li>
 <li>SOLID</li>
 <li>Cache</li>
 <li>facade in Laravel</li>
 <li>Seeding, Migration and using faker</li>
</ul>



##install

#### a)First way
 1. Clone the source code from github repository. To do that open terminal and type the following command:

        git clone https://github.com/Javad-Alirezaeyan/pizzaStore.git

2. Then, open  pizzaStore  directory with command:

        cd pizzaStore
3. Configure the variables of mysql database in the .evn fil

4.  run the following command to install react packages
       
        npm  install

5. run this command to install application and  initializing the setting

       php artisan pizza:install

#### b) second way
###### Using docker
    
    
    
##screenshots


![alt text](https://github.com/Javad-Alirezaeyan/pizzaStore/blob/master/screenshots/12.png)
![alt text](https://github.com/Javad-Alirezaeyan/pizzaStore/blob/master/screenshots/1.png)


![alt text](https://github.com/Javad-Alirezaeyan/pizzaStore/blob/master/screenshots/2.png)

![alt text](https://github.com/Javad-Alirezaeyan/pizzaStore/blob/master/screenshots/6.png)

![alt text](https://github.com/Javad-Alirezaeyan/pizzaStore/blob/master/screenshots/3.png)


![alt text](https://github.com/Javad-Alirezaeyan/pizzaStore/blob/master/screenshots/4.png)
![alt text](https://github.com/Javad-Alirezaeyan/pizzaStore/blob/master/screenshots/5.png)
![alt text](https://github.com/Javad-Alirezaeyan/pizzaStore/blob/master/screenshots/7.png)
![alt text](https://github.com/Javad-Alirezaeyan/pizzaStore/blob/master/screenshots/8.png)
![alt text](https://github.com/Javad-Alirezaeyan/pizzaStore/blob/master/screenshots/9.png)
![alt text](https://github.com/Javad-Alirezaeyan/pizzaStore/blob/master/screenshots/10.png)
![alt text](https://github.com/Javad-Alirezaeyan/pizzaStore/blob/master/screenshots/11.png)