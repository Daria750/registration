<?php
/* Smarty version 3.1.30, created on 2016-10-07 12:02:50
  from "J:\home\registration\www\templates\contentindex.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57f756aa8d7920_12013543',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8fe1356695b0f274ddd35f124885e3ecae3bf637' => 
    array (
      0 => 'J:\\home\\registration\\www\\templates\\contentindex.tpl',
      1 => 1475827363,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57f756aa8d7920_12013543 (Smarty_Internal_Template $_smarty_tpl) {
?>
	<div class="coninmain">
		<form id='profile' action='index.php' method='Post'>
		<table>
		<tr>
		<td><label>Логин:</label></td><td><input type='text' id='login' name='login' value=''></td>
		</tr>
		<tr>
		<td><label>Пароль:</label></td><td><input type='password' id='password' name='password' value=''></td>
		</tr>
		<tr>
		<td><input type='submit' id='Enter' value='Войти'></td>
		</tr>
		</table>
		<p id='registration'><a href='reg.php'>Регистрация</a></p>
		</form>
		<p><?php echo $_smarty_tpl->tpl_vars['a']->value;?>
</p>
	</div><?php }
}
