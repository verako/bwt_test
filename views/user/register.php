<?php include ROOT.'/views/header.php';?>
<div class="container" style="height: 100px"></div>
<div class="container">
	<?php 
	// if (isset($_REQUEST['adduser'])) {
	// 	$login=trim($_REQUEST['login']);
	// 	$pass=trim($_REQUEST['pass']);
	// 	if ($login==""|| $pass=="") {
	// 		echo "Не заполнены поля";
	// 		exit();
	// 	}
		
		
	//}
	//else{
	
	if ($result) {
		echo "<h4>Полователь зарегистирован успешно!!!</h4>";
	}
	if (isset($errors) && is_array($errors)) {
		echo "<ul>";
		foreach ($errors as $error) {
			echo "<li>".$error."</li>";
		}
		echo "</ul>";
	}
	?>
	<form  method="post" >
		<div class="form-group">
			<label for="name">Ваше имя</label>
			<input type="text" name="name" placeholder="Имя" value="<?php echo $name;?>" class="form-control">
		</div>
		<div class="form-group">
			<label for="surname">Ваша фамилия</label>
			<input type="text" name="surname"  placeholder="Фамилия" value="<?php echo $surname;?>" class="form-control">
		</div>
		<div class="form-group">
			<label for="pass1">Ваш пароль</label>
			<input type="password" name="pass"  placeholder="Пароль" value="<?php echo $pass;?>" class="form-control">
		</div>
		<div class="form-group">
			<label for="pass2">Повторите пароль</label>
			<input type="password" name="pass2"  placeholder="Повторите пароль" value="<?php echo $pass2;?>" class="form-control">
		</div>
		<div class="form-group">
			<label for="email">Ваш Email</label>
			<input type="email" name="email"  placeholder="Эл. почта" value="<?php echo $email;?>" class="form-control">
		</div>
		<div class="form-group">
			<label for="birthday">Выберите дату Вашего рождения</label>
			<input type="date" name="birthday" value="<?php echo $birthday;?>" class="form-control">
		</div>
		<div class="form-group">
			<label for="gender">Выберите ваш пол</label>
			<p>Female<input type="radio" name="genderid" value="2" class="form-control"></p>
			<p>Male<input type="radio" name="genderid" value="1" checked="" class="form-control"></p>
		</div>
		<input type="submit" class="btn btn-primary" name="adduser" value="Зарегистрироваться">
	</form>
	<br>
	<?php 
	//}
	?>
</div>


<!-- Модальное окно -->
<div id="myModal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Заголовок модального окна -->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h4 class="modal-title" id="myModalLabel">Вход</h4>
      </div>
      <!-- Основная часть модального окна, содержащая форму для регистрации -->
      <div class="modal-body">
        <!-- Форма для регистрации -->
  	    <form id="myForm" method="post" role="form" name="myForm">
	      <!-- Блок для ввода логина -->
	      <div class="form-group has-feedback">
	        <label for="login" class="control-label">Введите логин:</label>
            <div class="input-group">
	          <span class="input-group-addon"></span>         
	          <input type="text" class="form-control" required="required" name="login" pattern="&#91;A-Za-z&#93;{6,}" value="">
	        </div>
	        <span class="glyphicon form-control-feedback"></span>
	      </div>
	      <!-- Блок для ввода email -->
	      <div class="form-group has-feedback">
	        <label for="email" class="control-label">Введите email:</label>
            <div class="input-group">
	          <span class="input-group-addon"></span>
	          <input type="email" class="form-control" required="required" name="email" value="">
	        </div>
	        <span class="glyphicon form-control-feedback"></span>
	      </div>
          <!-- Конец блока для ввода email-->
	      <hr>
          <!--Изображение, содержащее код CAPTCHA-->		  
	      <img id="img-captcha" src="captcha.php">  
		  <!--Элемент, запрашивающий новый код CAPTCHA-->
	      <div id="reload-captcha" class="btn btn-default"><i class="glyphicon glyphicon-refresh"></i> Обновить</div>
		  <!--Блок для ввода кода CAPTCHA-->
	      <div class="form-group has-feedback">
            <label id="label-captcha" for="captcha" class="control-label">Пожалуйста, введите указанный на изображении код:</label>
		    <input id="text-captcha" name="captcha" type="text" class="form-control" required="required" value="">
		    <span class="glyphicon form-control-feedback"></span>
          </div>
        </form>
      </div>
      <!-- Нижняя часть модального окна -->
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Отмена</button>
        <button id="save" type="button" class="btn btn-primary">Вход</button>
      </div>
    </div>
  </div>
</div>



<!-- Модальное окно2 -->
<div id="myModal2" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Заголовок модального окна -->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h4 class="modal-title" id="myModalLabel2">Регистрация</h4>
      </div>
      <!-- Основная часть модального окна, содержащая форму для регистрации -->
      <div class="modal-body">
        <!-- Форма для регистрации -->
  	    <form id="myForm2" method="post" role="form" name="myForm2">
	      <!-- Блок для ввода имени -->
	     	<div class="form-group has-feedback">
		        <label for="name" class="control-label">Введите имя:</label>
	            <div class="input-group">
		            <input type="text" class="form-control" required="required" name="name" pattern="&#91;A-Za-z&#93;{6,}" value="">
		        </div>
	       	</div>
	      <!-- Блок для ввода фамилии -->
	     	<div class="form-group has-feedback">
		        <label for="surname" class="control-label">Введите фамилию:</label>
	            <div class="input-group">
		            <input type="text" class="form-control" required="required" name="surname" pattern="&#91;A-Za-z&#93;{6,}" value="">
		        </div>
	        </div>
	      <!-- Блок для ввода email -->
	        <div class="form-group has-feedback">
		        <label for="email" class="control-label">Введите email:</label>
	            <div class="input-group">
		          <input type="email" class="form-control" required="required" name="email" value="">
		        </div>
	        </div>
		 <!-- Блок для ввода пароля -->
			<div class="form-group has-feedback">
				<label for="pass">Password</label>
				<input type="password" name="pass" required="required" class="form-control">
			</div>
			<div class="form-group has-feedback">
				<label for="pass2">Confirm password</label>
				<input type="password" name="pass2" required="required" class="form-control">
			</div>
			<div class="form-group has-feedback">
				<label for="birthday">Birthday</label>
				<input type="date" name="birthday" required="required" class="form-control">
			</div>
			<div class="form-group has-feedback">
				<label for="gender">Gender</label>
				<p>Female<input type="radio" name="genderid" value="female" class="form-control"></p>
				<p>Male<input type="radio" name="genderid" value="male" class="form-control"></p>
			</div>
          <!-- Конец блока для ввода-->
	      <hr>
          <!--Изображение, содержащее код CAPTCHA-->		  
	      <img id="img-captcha2" src="captcha.php">  
		  <!--Элемент, запрашивающий новый код CAPTCHA-->
	      <div id="reload-captcha" class="btn btn-default"><i class="glyphicon glyphicon-refresh"></i> Обновить</div>
		  <!--Блок для ввода кода CAPTCHA-->
	      <div class="form-group has-feedback">
            <label id="label-captcha2" for="captcha" class="control-label">Пожалуйста, введите указанный на изображении код:</label>
		    <input id="text-captcha2" name="captcha" type="text" class="form-control" required="required" value="">
		    <span class="glyphicon form-control-feedback"></span>
          </div>
        </form>
      </div>
      <!-- Нижняя часть модального окна -->
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Отмена</button>
        <button id="save2" type="button" class="btn btn-primary">Регистрация</button>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="alert alert-success hidden" id="success-alert">
    <h2>Успех</h2>
    <div>Ваши данные были успешно отправлены.</div>
  </div>
  <!-- Кнопка для открытия модального окна -->
  <button id="btn-modal" type="button" class="btn btn-lg btn-success" data-toggle="modal" data-target="#myModal">
    Вход
  </button>
  <button id="btn-modal" type="button" class="btn btn-lg btn-success" data-toggle="modal" data-target="#myModal2">
    Регистрация
  </button>
</div>



<?php include ROOT.'/views/footer.php';?>
