<?php
echo "Чтобы завершить регистрация, проверьте свою почту, и перейдите по ссылке, указанной в письме!";
echo "<br><a href='index.php'>Перейти на страницу входа!</a>";
require("User.php");
$user=new User();
$token=$user->getToken($_COOKIE['email']);
$to="<".$_COOKIE['email'].">";
$subject="Подтверждение регистрации";
$message="Для завершение регистрации на сайте, перейдите по ccылке http://registration/conf_reg.php?token=$token";
$headers="From:company@yandex.ru\r\nReply-to:company@yandex.ru\r\nContent-type:text/plain;charset=utf-8";
mail($to, $subject, $message,$headers);
?>