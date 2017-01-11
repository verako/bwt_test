<?php include ROOT.'/views/header.php';//list?>
<div class="container" style="height: 100px"></div>
<div class="container">
	<?php 
		Db::SetParam('localhost','root','123456','bwt_test');
        $pdo=Db::connect();
        if(isset($_SESSION["user"])){ 
			foreach ($list as $key => $value) {
			 	echo "<div>".$list[$key]['name']."</div>";
			 	echo "<div>".$list[$key]['message']."</div>";
			 	echo "<div>".$list[$key]['date']."</div>";
			 	echo "<hr>";
	 		}	
		}
		else{
	?>
		<button class="btn btn-lg btn-success" ><a href="/login">Вход</a></button>
  		<button class="btn btn-lg btn-success"><a href="/user">Регистрация</a></button>
	<?php
		}
	 ?>
	

</div>
<?php include ROOT.'/views/footer.php';?>