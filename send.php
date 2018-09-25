<?php
session_start();
include 'dbh.php';
$msg=$_POST['msg'];
$name=$_SESSION['name'];


$sql="insert into posts(msg,name) value('$msg','$name)";
$result=$conn->query($sql);


header('Location:home.php');

?>