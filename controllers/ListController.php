<?php
include_once ROOT.'/models/ListModel.php';
class ListController
{


		public function actionView()
		{
			//echo "<br>Page:".$page;
			$list=array();
			$list=ListModel::getLists();
			require_once(ROOT.'/views/list/view.php');
			return true;
		}


}