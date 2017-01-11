<?php
include_once ROOT.'/models/FeedModel.php';
class FeedbackController
{


		public function actionView()
		{	
			$userId=FeedModel::checkLogged();
			//echo $userId;
			$users=array();
			$users=FeedModel::getUsers($userId);
		// 	FeedModel::getUser($id);
			
			require_once(ROOT.'/views/feedback/view.php');
			return true;
		}

}