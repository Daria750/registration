<?php
	
	if(isset($_COOKIE['enter']))header("Location: userpage.php");
	if((isset($_REQUEST['login']))&&(isset($_REQUEST['password']))){ 
	setcookie("login", $_REQUEST['login']);
	setcookie("password", $_REQUEST['Ok']);}
	require_once 'libs/Smarty.class.php';
$smarty=new Smarty();
require("user.php");
$result=new User();
$flag=$result->checkUser($_REQUEST['login'],$_REQUEST['password']);
if($flag==1){
	setcookie("enter", "Ok");
	header("Location: userpage.php");
	}
else if(($flag==0)&&(isset($_REQUEST['login'])))$a="Не правильный логин или пароль";
else if(($flag==2)&&(isset($_REQUEST['login'])))$a="Учетная запись не активирована";
else $a="";
$smarty->display('header.tpl');
$smarty->assign('a',$a);
$smarty->display('contentindex.tpl');
$smarty->display('footer.tpl');
?>
