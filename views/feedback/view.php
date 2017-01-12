<?php include ROOT.'/views/header.php';//feedback?>
<div class="container" style="height: 100px"></div>
<div class="container">
	<form  method="post" name="addcom">
		<?php 
            Db::SetParam('localhost','root','123456','bwt_test');
            $pdo=Db::connect();
           	 		
            //print_r($_SESSION);
             if(isset($_SESSION["user"])){ 
             	echo "<div class='form-group'>";
				echo "<label for='name'>Name</label>";
				echo "<input type='text' name='name' value='".$users[0]['name']."' class='form-control'>";
			    echo "</div>";
			    echo "<div class='form-group' hidden>";
				echo "<label for='email'>Email adres</label>";
				echo "<input type='email' name='email' value='".$users[0]['email']."' class='form-control'></div>";
        	}
     		else{
        ?>	
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" name="name" class="form-control">
			</div>
								
			<div class="form-group">
				<label for="email">Email adres</label>
				<input type="email" name="email" class="form-control">
			</div>

			 <?php 
     		}
     		
         ?>
			<div class="form-group">
				<label for="message">Comment</label>
				<textarea name="message" style=" width:100% " ></textarea>
			</div>
			<input type="submit" class="btn btn-primary" name="addcomment">
	</form>
</div>
<?php include ROOT.'/views/footer.php';?>