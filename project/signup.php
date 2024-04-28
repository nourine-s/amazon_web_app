<?php
session_start();
include("db.php");
if($_SERVER['REQUEST_METHOD']=='POST'){
    $F_name = $_POST['Fname'];
    $L_name = $_POST['Lname'];
    $email = $_POST['email'];
    $phone_number = $_POST['phonenumber'];
    $password = $_POST['password'];
    $select = "SELECT * FROM data WHERE email = '$email' ";
   if(isset($_POST['gender'])){
    $gender = $_POST['gender'];
   }
   $result = mysqli_query($con, $select);
   if(mysqli_num_rows($result) > 0){
      echo("<script type='text/javascript'> alert('User already exist!') </script>") ;

   }else{

$insert ="INSERT INTO `data`(`firstname`, `lastname`, `email`, `phonenumber`, `password` , `gender`) VALUES ('$F_name','$L_name','$email','$phone_number','$password','$gender')";
mysqli_query( $con , $insert );
header('location:home2.php');
}
}
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="icon"  href="logo2.png" >
    <title> Sign up </title>
<style>

    #form{
         margin: auto;
          border-radius: 8px;
          padding: 8px;
            background-color:white;
            width: 35%;
        }
    body{
    text-align: center;
    background-color: #245953;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    margin: 0;
    }
    .name {
     display: inline-block;

    }

    #button{
    background-color: #FF9900;
    border: #FF9900;
    padding: 8px;
    border-radius: 8px;
    font-size: xx-large;
    }
    .m{
    background-color: white;
    border-radius: 6px;
    color: black;
    padding: 8px 8px;
    font-size: large;
    }
    h1{
    color: #245953;
    }
    .text{
    padding: 12px 8px;
    width: 250px;
    border-radius: 8px;
   }
 a:link , a:visited {
    color: white;
    text-decoration: none;
 }
 a:hover {
    color: white;
    text-decoration: underline;
 }
 footer{
    color: white;
 }
 #p1{
    color: rgb(81, 81, 248);
    display: inline;
 } 
 a:hover #p1 {
    text-decoration: underline;
 }
 .optional{
    color: gray;
 }
 #reset{
    background-color: lightgray;
    border: lightgray;
    color: gray;
    padding: 8px;
    border-radius: 8px;
    font-size: xx-large;
 }
    </style>
<script>
     function checkpass(){
        var pass= document.getElementById("pass");
        var repass= document.getElementById("repass");
        if(pass.value===repass.value){
      document.getElementsByName("submit")=true;}
        else{
        alert("password does not match");
        return false;
        document.getElementsByName("submit") = false;
      repass.focus();
      repass.select();
    
      }}
    function checkfname()
    { 
     fname= document.getElementById("Fname");
    var letters = /^[A-Za-z]+$/;
    if(fname.value.match(letters))
     {
        checklname();
     }
    else
     {
     alert("Please check your first name  contains just letters");
     return false;
     fname.focus();  
     }
   }

     function checklname()
     {
       var  lname = document.getElementById("Lname");
     var letters = /^[A-Za-z]+$/;
     if(lname.value.match(letters))
     {
        checkphonenumber();
     }
     else
     {
     alert("Please check your last name  contains just letters");
     lname.focus();
     lname.select();
     document.getElementsByName("submit") = false;
     return false;
   
     }
      }

     function checkphonenumber()
     {
     var phonenumber=document.getElementById("phonenumber");
      var numbers = /^[0-9]+$/;
      if(phonenumber.value.match(numbers))
      {
      checkpass();
      }
      else
      {
      alert('Please check your phone number contains only numbers');
      phonenumber.focus();
     phonenumber.select();
     document.getElementsByName("submit") = false;
     return false;
   
      }
         } 

        

   
    </script>
</head>
<body>
<header><br><br><div><a href="home.html">
<img src="logo.png"><br><br>
   </div></a></header>
  <div id="form"> 
    <form  name="myform" id="myform"  method="post">
        <h1>Create account</h1>
  <div class="name"> First Name<br><input type="text" class="text" name="Fname" id="Fname"  required></div> 
  <div class="name" > Last Name<br><input type="text" class="text" name="Lname" id="Lname" required></div> <br>
    Email<br><input type="email" class="text" id="email" name="email" required><br>
   Phone number<br><input type="text" class="text" id="phonenumber" name="phonenumber" required><br>
  Password<br><input type="password" class="text" id="pass" name="password" minlength="8" placeholder="At least 8 characters" required><br>
   Confirm Password<br><input type="password" class="text" id="repass"  required><br><br>
    Gender : <input type="radio" name="gender" value="Male" >Male
             <input type="radio" name="gender" value="Female">Female
             <span class="optional">(optional)</span>
   <br> <br>
   <input type="reset" name="reset" id="reset" value="Reset">
   <input type="submit" name="submit" id="button" value="Create Account" onclick="checkfname()"  ></form><br>
   or<br><br>
  <a href="https://www.gmail.com/"><button class="m"> <i class="fa fa-google"> </i>&nbsp;&nbsp;SignUp with google</button></a><br><br>
  <a href="https://www.facebook.com/"><button class="m"><i class="fa fa-facebook-square"></i> &nbsp;&nbsp;SignUp with facebook</button></a><br><br>

    <hr><br>
    Already have an account?<a href="login.php" ><p id="p1"> Sign in </p></a><br><br>
   </div><br>
<footer>
    <div  >
        <a href="#">  Conditions of Use </a>&nbsp;&nbsp;
        <a href="#">  Privacy Notice </a>&nbsp;&nbsp;
        <a href="#"> Help</a><br>
        &copy;1996–2023, Amazon.com, Inc. or its affiliates
    </div>
</footer>
    </body>
</html>