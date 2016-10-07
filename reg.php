<?php
require_once 'libs/Smarty.class.php';
$smarty=new Smarty();
$smarty->display('header.tpl');
$smarty->display('contreg.tpl');
$smarty->display('footer.tpl');
?>