<?php
	session_start();
	if (!isset($_SESSION['autorized'])) {
    header("location: login.php");
	}
	if (!$_SESSION['autorized']) 
		header("location: login.php");
?>
<html>
<head>
  <title>laba 3 remote_text</title>
  <meta name="viewport" content="width=device-width">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <style type="text/css">
	@media screen and (max-width: 300px) {
    body {
        width: 80%;
        font-size: 40px;
    }
}
  </style>
</head>
<body>


  <?php
  
    if($_SESSION['username'] == 'user'){
      $content = file_get_contents('http://kappa.cs.petrsu.ru/~kulakov/courses/php/fortune.php');
      echo str_replace('pre', 'p', $content);
    } else {
      echo "Доступ запрещен!";
    }
  ?>