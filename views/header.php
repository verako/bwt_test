<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
  	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  	<title>bwt_test</title>
  	<link href='template/css/bootstrap.min.css' rel="stylesheet">
  	<link href="template/css/style.css" rel="stylesheet">
  	<script src="template/js/jquery-3.1.0.min.js"></script>
  	<script src="template/js/bootstrap.min.js"></script>
    <script src="template/js/captcha.js"></script>
  </head>

  <body style="background: white">
  <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- <a class="navbar-brand" href="#"><img src="images/logo.png" alt="logo" width="80" ></a> -->
          </div>
          
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li ><a href="/">Главная</a></li>
              <li ><a href="/weather">Погода</a></li>
              <li ><a href="/feedback">Добавить отзыв</a></li> 
              <li ><a href="/list">Отзывы</a></li> 
            </ul>
            <?php 
          //   Db::SetParam('localhost','root','123456','bwt_test');
          //   $pdo=Db::connect();
          //   print_r($_SESSION);
          //    if(isset($_SESSION["user"])){
          //      echo "<h4 id='hello'>Добро пожаловать, <span>".$_SESSION['user']."! </span><a class='exit' href='logout.php'>Выйти</a></h4>";
          // }
          
          ?>
            
          </div><!--/.navbar-collapse -->
        </div>
  </div>
	
