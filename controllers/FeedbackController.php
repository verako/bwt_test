<?php

class FeedbackController
{


		public function actionView()
		{
			require_once(ROOT.'/views/feedback/view.php');
			return true;
		}


}