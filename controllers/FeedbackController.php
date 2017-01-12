<?php
include_once ROOT.'/models/FeedModel.php';
include_once ROOT.'/models/UserModel.php';
class FeedbackController
{


		public function actionView()
		{	
			$userId=FeedModel::checkLogged();
			//echo $userId;
			$users=array();
			$users=FeedModel::getUsers($userId);
			
			//добавление комментария

			$name='';
			$email='';
			$message='';
			$result=false;
			if (isset($_POST['addcomment'])) {
				$name=$_POST['name'];
				$email=$_POST['email'];
				$message=$_POST['message'];
				$errors=false;
				if (!UserModel::checkName($name)) {
					$errors[]="Имя должно быть не короче 2 символов";
				}
				if (!UserModel::checkEmail($email)) {
					$errors[]="email введен не верно";
				}
				if (!FeedModel::checkMess($message)) {
					$errors[]="Наберите сообщение!";
				}
				if ($errors==false) {
					$result=FeedModel::addFeed($name,$email,$message);
				}
			}

			require_once(ROOT.'/views/feedback/view.php');

			return true;
		}

}