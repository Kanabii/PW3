<?php

session_start();

include 'conn.php';

$uname=$_POST['name'];
$pass=$_POST['pass'];



$sql="SELECT * from signup WHERE name='$uname' AND password='$pass'";

$result=$conn->query($sql);


$_SESSION['name']=$_POST['uname'];

header ("Location:home.php");













?>
<!DOCTYPE html>
<html>
<head>
    <link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
    <script src="js/bootstrap.js"></script>
    
    <script src="js/bootstrap.min.js"></script>
    
<style>
    #head{
        background-color: black;
        color: white;
    }
    body {
        background-image: url(image/white%20wood.jpg);
        background-repeat: no-repeat;
    }
</style>
</head>
<body>  
</body>
</html>