<div class="conusermain">
<p>Здравствуйте, <span id="greet">{$name}</span><a href='logout.php'> Выйти</a></p>
<p>Имя:<span id="pfirstname">{$name}</span></p>
<p>Фамилия:<span id="plname">{$lname}</span></p>
<p>Логин:<span id="plogin">{$login}</span></p>
<p>Телефон:<span id="ptelephone">{$telephone}</span></p>
<p>email:<span id="pemail">{$email}</span></p>
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
<script src="js/jquery-1.10.1.min.js"></script>
<script language="javascript" src="js/reg.js"></script>
<script language="javascript" src="js/script.js"></script>
</div>