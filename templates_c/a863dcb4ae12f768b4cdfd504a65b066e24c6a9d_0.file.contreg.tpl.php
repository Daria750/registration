<?php
/* Smarty version 3.1.30, created on 2016-10-07 12:43:55
  from "J:\home\registration\www\templates\contreg.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57f7604bc8b6d9_21706825',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a863dcb4ae12f768b4cdfd504a65b066e24c6a9d' => 
    array (
      0 => 'J:\\home\\registration\\www\\templates\\contreg.tpl',
      1 => 1475829833,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57f7604bc8b6d9_21706825 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="cregmain">
<p class="reglabel">Заполните форму:</p>
<form id="profile" action="login.php" method="POST">
<table>
<tr><td><label class="reglabel">Ваше имя:</label></td><td><input class="reginput" type="text" id="firstname" name="firstname"></td></tr>
<tr><td><label class="reglabel">Ваша фамилия:</label></td><td><input class="reginput" type="text" id="lname" name="lname"></td></tr>
<tr><td><label class="reglabel">Логин:</label></td><td><input class="reginput" type="text" id="login" name="login"></td></tr>
<tr><td><label class="reglabel">Пароль:</label></td><td><input class="reginput" type="password" id="password" name="password"></td></tr>
<tr><td><label class="reglabel">Пароль еще раз:</label></td><td><input class="reginput" type="password" id="password1" name="password1"></td></tr>
<tr><td><label class="reglabel">Телефон в формате +38-0xx-xxxxxxx:</label></td>
<td><input class="reginput" type="tel" id="telephone" name="telephone"></td></tr>
<tr><td><label class="reglabel">email:</label></td><td><input class="reginput" type="email" id="email" name="email"></td></tr>
<tr><td><input type="submit" id="sendData" value="Отправить"></td></tr>
</table>
</form>
<?php echo '<script'; ?>
 language="javascript" src="js/reg.js"><?php echo '</script'; ?>
>
</div><?php }
}
