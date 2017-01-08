<?php include ROOT.'/views/header.php';//list?>
<div class="container" style="height: 100px"></div>
<div class="container">
	<?php 
	foreach ($list as $key => $value) {
	 	echo "<div>".$list[$key]['name']."</div>";
	 	echo "<div>".$list[$key]['massage']."</div>";
	 	echo "<div>".$list[$key]['date']."</div>";
	 	echo "<hr>";
	 }
	 ?>
	

</div>
<?php include ROOT.'/views/footer.php';?>