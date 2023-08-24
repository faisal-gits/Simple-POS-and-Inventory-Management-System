<?php
session_start();
include('../connect.php');
$a = $_POST['name'];
$b = $_POST['username'];
$c = $_POST['password'];
$d = $_POST['position'];
// query
$sql = "INSERT INTO user (name,username,password,position) VALUES (:a,:b,:c,:d)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d));
header("location: admin-settings.php");


?>