<?php
$firstname=$_POST["firstname"];
$lname=$_POST["lname"];
$login=$_POST["login"];
$email=$_POST["email"];  
$telephone=$_POST["telephone"];
$str=json_encode($_POST);
echo($str) ;
require("user.php");
$result=new User();
$result->changeUser($_COOKIE['login'],$firstname,$lname,$login,$telephone,$email);
setcookie('login',$login);
?>