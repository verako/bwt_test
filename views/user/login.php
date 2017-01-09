<?php include ROOT.'/views/header.php';?>
<div class="container" style="height: 100px"></div>
<div class="container">
<?php 
	    if (isset($errors) && is_array($errors)) {
			echo "<ul>";
			foreach ($errors as $error) {
				echo "<li>".$error."</li>";
			}
			echo "</ul>";
		}

       ?>
	  <form  method="post" name="log">
	     <div class="form-group">
			<label for="email">Ваш Email</label>
			<input type="email" name="email"  placeholder="Эл. почта" value="<?php echo $email;?>" class="form-control">
		</div>
		<div class="form-group">
			<label for="pass">Ваш пароль</label>
			<input type="password" name="pass"  placeholder="Пароль" value="<?php echo $pass;?>" class="form-control">
		</div>
          <input  type="submit" class="btn btn-primary" name="submit" value="Вход">
        </form>

 </div>
 
<?php include ROOT.'/views/footer.php';?>