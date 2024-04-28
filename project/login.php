<?php
session_start();
include("db.php");
if($_SERVER['REQUEST_METHOD']=='POST'){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $select="SELECT * FROM `data` WHERE email='$email'";
    $result = mysqli_query($con , $select);
    if($result){
        if($result && mysqli_num_rows($result)>0){
            $user_data= mysqli_fetch_assoc($result);
            if($user_data['password']==$password){
                header('location:home2.php');
                die;
            }
        }
    }
    echo(" <script type='text/javascript'> alert('Wrong email or password'); </script> ");
}
?>
<!DOCTYPE html>
<html>
   <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon"  href="logo2.png" >
   <title>Sign in</title>
   <style>
 p {
            display: flex;
            flex-direction: row;
        }
          
        p:before,
        p:after {
            content: "";
            flex: 1 1;
            border-bottom: 1px solid #615f5f;
            margin: auto;
            
        }
#form{
         margin: auto;
         border-radius: 8px;
         padding: 8px;
            background-color:white;
            width: 25%;
        }
body{
    background-color: #245953;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    text-align: center;
    margin: 0;
}
#button{
    background-color: #FF9900;
    border: #FF9900;
    padding: 8px;
    border-radius: 8px;
    font-size: xx-large;
}
h1{
    color: #245953;
    }
    button{
        background-color: lightgray;
        border: lightgray;
        padding: 8px;
        border-radius: 4px;
        font-size: x-large;
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
   </style>
   </head> 
   <body>
    <header><br><br><div><a href="home.html">
        <img src="logo.png">
           </div></a></header><br><br>
   <div id="form"> <form method="post">
        <h1>Sign in</h1>
    Email  <br><input type="email" class="text" name="email" required><br><br>
    Password <br><input type="password" class="text" name="password" required><br><br>
    <input type="checkbox" >Remember me<br><br>
    
    <a href="reset.html"><p id="p1">Forgot  password?</p></a><br><br>
    <input type="submit" id="button" name="login" value="Sign in" >
    </form><br>
   <p> new to amazon </p>
  <a href="signup.php">  <button > Create your account</button></a><br><br>
</div><br>
    <footer>
        <div >
            <a href="#">  Conditions of Use </a>&nbsp;&nbsp;
            <a href="#">  Privacy Notice </a>&nbsp;&nbsp;
            <a href="#"> Help</a><br>
            &copy;1996–2023, Amazon.com, Inc. or its affiliates
        </div>
    </footer>
   </body>
</html>