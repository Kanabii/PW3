<?php

include 'conn.php';
$title=$_POST['title'];
$des=$_POST['des'];
session_start();

$username = isset($_SESSION['name'])? $_SESSION['name']: NULL;
$sql="insert into posts(name,title,post)

values('$uname','$title','$des')";

$result=$conn->query($sql);

header ("Location:home.php");















?>