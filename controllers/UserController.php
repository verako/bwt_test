<?php
include_once ROOT.'/models/UserModel.php';
class UserController
{


		public function actionRegister()
		{
			$name='';
			$surname='';
			$pass='';
			$pass2='';
			$email='';
			$birthday='';
			$genderid='';
			$result=false;
			if (isset($_POST['adduser'])) {
				$name=$_POST['name'];
				$surname=$_POST['surname'];
				$pass=$_POST['pass'];
				$pass2=$_POST['pass2'];
				$email=$_POST['email'];
				$birthday=$_POST['birthday'];
				$genderid=$_POST['genderid'];

				$errors=false;

				if (!UserModel::checkName($name)) {
					$errors[]="Имя должно быть не короче 2 символов";
				}
				if (!UserModel::checkSurname($surname)) {
					$errors[]="Фамилия должна быть не короче 2 символов";
				}
				if (!UserModel::checkPass($pass,$pass2)) {
					$errors[]="Пароль не короче 6 символов, либо повтор пароля не совпадает";
				}
				if (!UserModel::checkEmail($email)) {
					$errors[]="email введен не верно";
				}
				if (UserModel::checkEmailExists($email)) {
					$errors[]="Такой email уже зарегистрирован";
				}
				if ($errors==false) {
					$result=UserModel::register($name,$surname,$pass,$email,$birthday,$genderid);
				}

				
			}
			require_once(ROOT.'/views/user/register.php');
			return true;
		}


		public function actionLogin()
		{
			$email='';
			$pass='';
			if (isset($_POST['submit'])) {
				$email=$_POST['email'];
				$pass=$_POST['pass'];

				$errors=false;
				//валидация полей
				if (!UserModel::checkEmail($email)) {
					$errors[]="email введен не верно";
				}
				if (!UserModel::checkPass1($pass)) {
					$errors[]="Пароль не короче 6 символов";
				}
				//проверяем существует ли пользователь
				$userId=UserModel::checkUserData($email,$pass);
				if ($userId==false) {
					$errors[]="Не правльные данные для входа";
				}
				else{
					UserModel::auth($userId);//записываем пользователя в сессию
					header("Location:/feedback");
				}
			}
			require_once(ROOT.'/views/user/login.php');
			return true;
		}

}