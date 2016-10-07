<?php
if(!isset($_COOKIE['enter']))header("Location: index.php");
require("user.php");
$result=new User();
$result=$result->getUser($_COOKIE['login']);
$name=$result['name'];
$lname=$result['lname'];
$telephone=$result['telephone'];
$email=$result['email'];
$login=$result['login'];
require_once 'libs/Smarty.class.php';
$smarty=new Smarty();
$smarty->display('header.tpl');
$smarty->assign('name',$name);
$smarty->assign('lname',$lname);
$smarty->assign('telephone',$telephone);
$smarty->assign('login',$login);
$smarty->assign('email',$email);
$smarty->display('conuserpage.tpl');
$smarty->display('footer.tpl');
?>
