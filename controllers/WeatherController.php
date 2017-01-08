<?php

class WeatherController
{


		public function actionView()
		{
			require_once(ROOT.'/views/weather/view.php');
			return true;
		}


}