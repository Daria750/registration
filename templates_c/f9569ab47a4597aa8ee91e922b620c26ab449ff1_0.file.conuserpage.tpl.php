<?php
/* Smarty version 3.1.30, created on 2016-10-07 12:52:07
  from "J:\home\registration\www\templates\conuserpage.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57f76237956e41_73933101',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9569ab47a4597aa8ee91e922b620c26ab449ff1' => 
    array (
      0 => 'J:\\home\\registration\\www\\templates\\conuserpage.tpl',
      1 => 1475830323,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57f76237956e41_73933101 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="conusermain">
<p>Здравствуйте, <span id="greet"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</span><a href='logout.php'> Выйти</a></p>
<p>Имя:<span id="pfirstname"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</span></p>
<p>Фамилия:<span id="plname"><?php echo $_smarty_tpl->tpl_vars['lname']->value;?>
</span></p>
<p>Логин:<span id="plogin"><?php echo $_smarty_tpl->tpl_vars['login']->value;?>
</span></p>
<p>Телефон:<span id="ptelephone"><?php echo $_smarty_tpl->tpl_vars['telephone']->value;?>
</span></p>
<p>email:<span id="pemail"><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</span></p>
<button id="change">Изменить</button>
<div class="modal_bg"></div>
<div class="modal_window">
<form method="post" action="" id="form_id">
<table>
<tr><td><label class="reglabel">Ваше имя:</label></td><td><input class="reginput" type="text" id="firstname" name="firstname"></td></tr>
<tr><td><label class="reglabel">Ваша фамилия:</label></td><td><input class="reginput" type="text" id="lname" name="lname"></td></tr>
<tr><td><label class="reglabel">Логин:</label></td><td><input class="reginput" type="text" id="login" name="login"></td></tr>
<tr><td><label class="reglabel">Телефон в формате +38-0xx-xxxxxxx:</label></td>
<td><input class="reginput" type="tel" id="telephone" name="telephone"></td></tr>
<tr><td><label class="reglabel">email:</label></td><td><input class="reginput" type="email" id="email" name="email"></td></tr>
</table>
</form>
<button id="sendData">Сохранить</button></div>
<?php echo '<script'; ?>
 src="js/jquery-1.10.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="javascript" src="js/reg.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="javascript" src="js/script.js"><?php echo '</script'; ?>
>
</div><?php }
}
