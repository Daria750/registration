<?php
$firstname=$_POST["firstname"];
$lname=$_POST["lname"];
$login=$_POST["login"];
$email=$_POST["email"];  
$telephone=$_POST["telephone"];
$password=md5(trim($_POST['password']));
require_once("User.php");
$user=new User();
if(count($_POST)==7)
{
    $err = array();
    if(!preg_match("/^[a-zA-Z0-9]+$/",$login))
    {

        $err[] = "Логин может состоять только из букв английского алфавита и цифр";

    }
    if(strlen($_POST['login']) < 3 or strlen($_POST['login']) > 30)
    {
		$err[] = "Логин должен быть не меньше 3-х символов и не больше 30";
    }
		if($user->CheckLogin($login)>0)

    {

        $err[] = "Пользователь с таким логином уже существует в базе данных";

    }

    if(count($err) == 0)

    {
	$user->inDataBase($firstname, $lname, $login, $password, $telephone,$email);
	setcookie('email',$email);
	header("Location:sendmail.php");
    }

    else
    {
        print "<b>При регистрации произошли следующие ошибки:</b><br>";

        foreach($err AS $error)

        {
            print $error."<br>";
        }
        echo "<a href='javascript:history.back();'>Вернуться на страницу регистрации</a>";

    }

}
?>