<?php 
include_once ROOT.'/components/Db.php';
class FeedModel{
	public static function getUsers($id){
		Db::SetParam('localhost','root','123456','bwt_test');
		$pdo=Db::connect();
		$user=array();
		//$id=$_SESSION["user"];
		$result=$pdo->query('SELECT name, email FROM Users WHERE id='.$id);
		$i=0;
		while($row=$result->fetch()){
			$user[$i]['name']=$row['name'];
			$user[$i]['email']=$row['email'];
			$i++;
		}
		return $user;
	}
	public static function checkLogged(){
		session_start();
		if(isset($_SESSION["user"])){ 
			return $_SESSION["user"];
		}
	}
}