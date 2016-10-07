<?php
$to="Dasha<sasha750@yandex.ru>";
$subject="Mail Robot";
$message="http://phplessons/registration1/index.php";
$headers="From:dasha.hmarenko@yandex.ru\r\nReply-to:dasha.hmarenko@yandex.ru\r\nContent-type:text/plain;charset=windows-1251";
echo mail($to, $subject, $message,$headers);
?>