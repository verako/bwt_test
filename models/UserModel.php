<?php 
include_once ROOT.'/components/Db.php';
class UserModel{
	public static function register($name,$surname,$pass,$email,$birthday,$genderid){
		Db::SetParam('localhost','root','123456','bwt_test');
		$pdo=Db::connect();

		$sql='INSERT INTO Users (name,surname,pass,email,birthday,genderid) VALUE (:name,:surname,:pass,:email,:birthday,:genderid)';

		$result=$pdo->prepare($sql);
		$result->bindParam(':name',$name,PDO::PARAM_STR);
		$result->bindParam(':surname',$surname,PDO::PARAM_STR);
		$result->bindParam(':pass',$pass,PDO::PARAM_STR);
		$result->bindParam(':email',$email,PDO::PARAM_STR);
		$result->bindParam(':birthday',$birthday,PDO::PARAM_STR);
		$result->bindParam(':genderid',$genderid,PDO::PARAM_STR);

		return $result->execute();

	}
	public static function checkUserData($email,$pass){
		Db::SetParam('localhost','root','123456','bwt_test');
		$pdo=Db::connect();

		$sql = 'SELECT * FROM Users WHERE email=:email AND pass=:pass';
		$result=$pdo->prepare($sql);
		$result->bindParam(':pass',$pass,PDO::PARAM_INT);
		$result->bindParam(':email',$email,PDO::PARAM_INT);
		$result->execute();

		$user=$result->fetch();
		if ($user) {
			return $user['name'];
		}
		return false;
	}
	public static function auth($userName){
		session_start();
		$_SESSION['user']=$userName;
	}


	//проверяем имя не меньше 3 символов
	public static function checkName($name){
		if(strlen($name)>=2){
			return true;
		}
		return false;

	}
	public static function checkSurname($surname){
		if(strlen($surname)>=2){
			return true;
		}
		return false;

	}
	//проверяем пароль не меньше 6 символов
	public static function checkPass($pass,$pass2){
		if($pass==$pass2 && (strlen($pass)>=6)){
			return true;
		}
		return false;

	}
	public static function checkPass1($pass){
		if(strlen($pass)>=6){
			return true;
		}
		return false;

	}
	public static function checkEmail($email){
		if(filter_var($email, FILTER_VALIDATE_EMAIL)){
			return true;
		}
		return false;

	}
	public static function checkEmailExists($email){
		Db::SetParam('localhost','root','123456','bwt_test');
		$pdo=Db::connect();

		$sql='SELECT COUNT(*) FROM Users WHERE email=:email';

		$result=$pdo->prepare($sql);
		$result->bindParam(':email', $email, PDO::PARAM_STR);
		$result->execute();

		if($result->fetchColumn()){
			return true;
		}
		return false;

	}
}