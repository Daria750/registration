<?php
$token=$_GET['token'];
require("User.php");
$user=new User();
$user->changeStatus($token);

?>