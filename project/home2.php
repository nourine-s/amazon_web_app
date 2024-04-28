<?php
session_start();
include("db.php");

?>

<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="icon"  href="logo2.png" >
        <title> Welcome to amazon</title>
<style>
    #cart-icon{
  cursor: pointer;
}
 #f{
    background-color: #245953;
    color: white;
    width: 100%;
    text-align: center;
 }
 #icon-bar {
  display: flex;
  justify-content: center;
  background-color: #245953;
  height: 40px;
  text-align: center;
  padding: 18px;
  font-size: 30px;
}
 body{
    text-align: center;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    background-color: #245953;
    margin: 0;
 }
 .text{
    padding: 12px 8px;
    width: 400px;
    height: fit-content;
    border: none;
}
#search {
    height: 40px;
    width: 30px;
    background-color: white;
    cursor: pointer;
    border: none;
}
 #search i{
     color: black;

 }
 select{
    height: 40px;
    width: 160px;
    background-color: white;
    border: none;
}
 #d2{
    background-color: #FF9900;
    color: white;
    width: 110%;
   height: 40px;
   padding: 10px;
   font-size: 25px;
   text-align: left;
 }

 a:link , a:visited  {
    color: white;
    text-decoration: none;
 }
 a:hover ,a i:hover{
    color: white;
    text-decoration: underline;
 }
 #back{
    background-color: #366c66;
    
 }
 #d3{
    background-color: #14423c;
    color: white;
 }
 #div1{
 background-image: url("back.jpg");
 background-size: cover;
 padding-top: 250px;

 }
 #div1 table {
    background-color: white;
    text-align: center;
    display: inline-block;

 }
 .off{
    background-color: #FF9900;
    color: white;
    width: 150px;
    text-align: center;
 }
 #div2 table{
    background-color: white;
    text-align: center;
    display: inline-block;
 }
 .button{
    background-color: #FF9900;
    border: #FF9900;
    padding: 8px;
    border-radius: 8px;
    font-size:large;
    cursor: pointer;
 }
 .box {
  color: white;
  width: 30px;
  height: 30px;
  text-align: center;
 display: inline-block;
 }
 .cart-count {
  position: absolute;
  color: #ff9900;
  top: -17px;
  right: 7px;
  padding: 13px;
  font-size: 20px;
  height: 20px;
  width: 20px;
  line-height: 20px;
  border-radius: 50%;
  z-index: 99;
 }
 .cart {
  position: fixed;
  top: 0;
  right: -100%;
  width: 400px;
  height: 100vh;
  overflow-y: auto;
  overflow-x: hidden;
  padding: 20px;
  background-color: #245953;
  box-shadow: 0 1px 4px rgba(40, 37, 37, 0.1);
  z-index: 100;
 }

 .cart-active {
  right: 0;
  transition: 0.5s;
 }

 .cart-title {
  color: white;
  text-align: center;
  font-size: 1.5rem;
  font-weight: 500;
  margin-bottom: 1rem;
  padding-bottom: 20px;
  border-bottom: 1px solid rgba(0, 0, 0, 0.1);
 }

 .cart-box {
  display: grid;
  grid-template-columns: 32% 50% 18%;
  align-items: center;
  gap: 1rem;
  margin-top: 1rem;
  border-bottom: 1px solid rgba(0, 0, 0, 0.1);
  padding-bottom: 10px;
 }

 .price-box {
  color: white;
  display: flex;
  justify-content: space-between;
 }


 .cart-remove {
  font-size: 24px;
  color:rgb(207, 81, 81);
  cursor: pointer;
 }

 .total {
  color: white;
  display: flex;
  justify-content: flex-end;
  margin-top: 1.5rem;
 }

 .total-title {
  color:white;
  font-size: 1rem;
  font-weight: 600;
 }

 .total-price {
  color: white;
  margin-left: 0.5rem;
 }

 .btn-buy {
  background-color: #ff9900;
  padding: 12px 20px;
  color: black;
  border: none;
  font-size: 1rem;
  font-weight: 500;
  cursor: pointer;
  border-radius: 8px;
  
 }

 #cart-close {
  color:rgb(207, 81, 81);
  position: absolute;
  top: 1rem;
  right: 0.8rem;
  font-size: 2rem;
  cursor: pointer;
 }
    </style>
    </head>
    <body>


<header><div id="icon-bar">
  <a href="home2.php"><img src="logo.png" width="200px" height="50px" ></a>&nbsp;&nbsp;&nbsp;&nbsp;
  <select >
    <option disabled selected>All categories</option>
    <option>Amazon Devices</option>
    <option> Electronics </option>
    <option> Amazon Fashion</option>
    <option>Healthcare</option>
    <option>Babycare</option>
    <option>Beauty & Personal care</option>
  </select>
  <input type="text" class="text" placeholder="Search.." name="search">
  <button id="search" type="submit"><i class="fa fa-search"></i></button>&nbsp;&nbsp;&nbsp;&nbsp;  
  <a href="userprofile.html"><i class="fa fa-user"></i></a>&nbsp;&nbsp;&nbsp;&nbsp; 
  <div class="box">
    <div class="cart-count">0</div>
    <i class="fa fa-shopping-cart" name="cart"  id="cart-icon" ></i>
  </div>
          <div class="cart">
            <div class="cart-title">Cart Items</div>
            <div class="cart-content">
              <div class="total">
                  <div class="total-title">Total</div>
                  <div class="total-price">$.0</div>
                </div>
                <button class="btn-buy">Place Order</button>
                <i class="fa fa-times" name="close" id="cart-close"></i>
          </div>
        </div>&nbsp;&nbsp;&nbsp;&nbsp;
  
  <a href="login.php" style="float: right; "><input type="button"  class="button" value="Log out"></a>
 
</div>
<div id="d2">
    <a href="#"><i class="fa fa-navicon">All</a></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="home2.php">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="#">Today's Deals</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="#">Contact us</a>
    <a></a>
</div>
</header>
<div id="div1" >
    <a href="#"><table border="0" >
   <tr>
    <td> <img src="headphone.jpg" width="150" height="140"></td>
   <td> <img src="camera.jpg" width="130" height="140"></td>
</tr>
   <tr>
    <td>Headphones</td>
    <td>security cameras</td>
   </tr>
   <tr>
    <td><img src="smartwatch.jpg" width="130" height="140"></td>
    <td> <img src="powerbank.jpg" width="140" height="140"></td>
   </tr>
   <tr>
  <td>  Smartwatches</td>
   <td>Powerbanks</td>
</tr>
</table></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="#"><table border="0" >
    <tr>
     <td> <img src="womenshirt.jpg" width="120" height="140"></td>
    <td> <img src="menshirt.jpg" width="120" height="140"></td>
 </tr>
    <tr>
     <td>Women's Shirt</td>
     <td>Men's Shirt</td>
    </tr>
    <tr>
     <td><img src="ment-shirt.jpg" width="120" height="140"></td>
     <td> <img src="woment-shirt.jpg" width="120" height="140"></td>
    </tr>
    <tr>
   <td> Men's T-shirt</td>
    <td>Women's T-shirt</td>
 </tr>
 </table></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <a href="makeupSec.html"><table border="0"><tr></tr>
 <tr><td>Make up | New Arrivals</td></tr>
    <tr><td><img src="makeup.jpg" width="330" height="280"></td></tr>
    <tr> <td>Shop now</td></tr>
 </table></a><br><br>
</div><br><br>
 <div id="div2">
    <a href="#"><table border="0">
<tr><td><img src="microwave.jpg" height="200" width="250"></td></tr>
<tr><td><div class="off">Up to 30% off</div><br>Microwave</td></tr>
</table></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="#"><table border="0">
    <tr><td><img src="uno.jpg" height="200" width="250"></td></tr>
    <tr><td><div class="off">Up to 30% off</div><br>card games</td></tr>
    </table></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

    <a href="#"><table border="0">
        <tr><td><img src="adidas.jpg" height="200" width="270"></td></tr>
        <tr><td><div class="off">Up to 30% off</div><br>Adidas shoes</td></tr>
</table></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="#"><table border="0">
    <tr><td><img src="coffemachine.jpg" height="200" width="250"></td></tr>
    <tr><td><div class="off">Up to 30% off</div><br>Coffee Machines</td></tr>
    </table></a>
</div> <br><br>   
<footer id="footer">
    <a href="#icon-bar"><div id="back">
    Back to top
    </div></a>
   <div> <table border="0" id="f">
    <tr> 
        <th>Shop with us</th>
        <th>Let Us Help You</th>
    </tr>
    <tr >
        <td><a href="userprofile.html">Your Account</a></td>
        <td><a href="#">Help</a></td>
    </tr>
    <tr>
        <td><a href="#">Your Orders</a></td>
        <td><a href="#">Shipping & delivery</a></td>
    </tr>
    <tr>
        <td><a href="#">Your Addresses</a></td>
        <td> <a href="#">Returns & Replacements</a></td>
    </tr>
    </table></div>
    <div id="d3">
        <a href="#">  Conditions of Use </a>&nbsp;&nbsp;
        <a href="#">  Privacy Notice </a>&nbsp;&nbsp;
        <a href="#"> Help</a><br>
        &copy;1996–2023, Amazon.com, Inc. or its affiliates
    </div>
</footer>
    <script src="make.js"></script>
    </body>
</html>