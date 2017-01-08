<?php include ROOT.'/views/header.php';?>
<div class="container" style="height: 100px"></div>
<div class="container">
	<?php 
	if (isset($_REQUEST['adduser'])) {
		$login=trim($_REQUEST['login']);
		$pass=trim($_REQUEST['pass']);
		if ($login==""|| $pass=="") {
			echo "Не заполнены поля";
			exit();
		}
		if (is_uploaded_file($_FILES['avatar']['tmp_name'])) {
			move_uploaded_file($_FILES['avatar']['tmp_name'], 'images/'.$_FILES['avatar']['name']);
			$path='images/'.$_FILES['avatar']['name'];
		}
		$customer=new Customer($login,$pass,$path);
		$customer->IntoDb();
	
	}
	else{
	?>
	<form action="index.php?page=4" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label for="name">Name</label>
			<input type="text" name="name" class="form-control">
		</div>
		<div class="form-group">
			<label for="surname">Surname</label>
			<input type="text" name="surname" class="form-control">
		</div>
		<div class="form-group">
			<label for="pass1">Password</label>
			<input type="password" name="pass" class="form-control">
		</div>
		<div class="form-group">
			<label for="pass2">Confirm password</label>
			<input type="password" name="pass2" class="form-control">
		</div>
		<div class="form-group">
			<label for="email">Email adres</label>
			<input type="email" name="email" class="form-control">
		</div>
		<div class="form-group">
			<label for="birthday">Birthday</label>
			<input type="date" name="birthday" class="form-control">
		</div>
		<div class="form-group">
			<label for="gender">Gender</label>
			<p>Female<input type="radio" name="genderid" value="female" class="form-control"></p>
			<p>Male<input type="radio" name="genderid" value="male" class="form-control"></p>
		</div>
		<button type="submit" class="btn btn-primary" name="adduser">Register</button>
	</form>
	<br>
	<?php 
	}
	?>
</div>
<?php include ROOT.'/views/footer.php';?>
