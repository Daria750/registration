<?php
class User{
	private $login;
	private $password;
	public function ConnectionDB(){
			$mysqli=new mysqli('localhost','user','root','users');
			$mysqli->query('set names utf8');
			return $mysqli;
		}
		public function CheckLogin($login){
			 $this->login=$login;
			 $mysqli=$this->ConnectionDB();
			 $result_set=$mysqli->query("SELECT COUNT(login) as num FROM `people` WHERE login='$this->login'");
			 $arr=$result_set->fetch_assoc();
			 $result_set->close();
			 $mysqli->close();
			 return $arr['num'];
		} 
		public function checkUser($login, $password){
		$this->login=$login;
		$this->password=$password;
		$mysqli=$this->ConnectionDB();
		if($this->CheckLogin($this->login)>0){
		$result_set=$mysqli->query("SELECT password, status FROM `people` WHERE login='$this->login'");
		$arr1=$result_set->fetch_assoc();
		$result_set->close();
		$mysqli->close();
		if($arr1['password']==md5($this->password)){
			if($arr1['status']==1)return 1;
			else return 2;
		}
		else return 0;
		}
		else return 0;
		}
		public function getUser($login){
		$this->login=$login;
		$mysqli=$this->ConnectionDB();
		$result_set=$mysqli->query("SELECT * FROM `people` WHERE login='$this->login'");
		$arr=$result_set->fetch_assoc();
		$result_set->close();
		$mysqli->close();
		return $arr;
		}
		public function changeUser($flogin,$name,$lname,$login,$telephone,$email){
		$mysqli=$this->ConnectionDB();
		$mysqli->query(
						"UPDATE people 
						SET name='$name',
						lname='$lname',
						login='$login',
						telephone='$telephone',
						email='$email'
						WHERE login='$flogin'");
		$mysqli->close();
		}
		public function inDataBase($firstname, $lname, $login, $password, $telephone,$email){
			$mysqli=$this->ConnectionDB();
			$mysqli->query("INSERT INTO `people` (`id`, `name`, `lname`, `login`, `password`, `telephone`, `email`) VALUES (NULL, '$firstname', '$lname', '$login', '$password', '$telephone','$email');");
			$token=md5(rand()).md5($firstname);
			$mysqli->query("INSERT INTO `confirm_registration` (`email`, `token`) VALUES ('$email', '$token');");
			$mysqli->close();
		}
		public function getToken($email){
		$mysqli=$this->ConnectionDB();
		$result_set=$mysqli->query("SELECT `token` FROM `confirm_registration` WHERE email='$email'");
		$arr=$result_set->fetch_assoc();
		$result_set->close();
		$mysqli->close();
		return $arr['token'];
		}
		public function changeStatus($token){
			$mysqli=$this->ConnectionDB();
			$result_set=$mysqli->query("SELECT COUNT(token) as ctoken FROM `confirm_registration` WHERE token='$token'");
			 $arr=$result_set->fetch_assoc();
			 if($arr['ctoken']>0){
			 	$result_set=$mysqli->query("SELECT email  FROM `confirm_registration` WHERE token='$token'");
			 	$arr=$result_set->fetch_assoc();
			 	$email=$arr['email'];
				$mysqli->query("UPDATE people SET status='1'WHERE email='$email'");
				$mysqli->query("DELETE FROM `confirm_registration` WHERE `token` = '$token' ;");
				header("Location:index.php");
				}
				$result_set->close();
				$mysqli->close();
		}
		}