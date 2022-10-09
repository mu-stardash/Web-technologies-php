<?php
   session_start();
?>
<html>
<head>
  <title>laba3 login</title>
</head>
<body>
 <!-- $_SERVER — Информация о сервере и среде исполнения 
  'PHP_SELF' - Имя файла скрипта, который сейчас выполняется, относительно корня документов
-->
  <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Username:<input name="usr" placeholder="логин"><br>
    Password:<input name="pswd" placeholder="пароль"><br>
    <button type="submit">Login</button>
  </form>

  <?php
    $users = ['user' => 'qwerty'];
    $user = $pswd = '';
	// $_POST — Переменные HTTP POST
    if($_SERVER["REQUEST_METHOD"] == "POST"){
      if(!empty($_POST["usr"])){
        $user = $_POST["usr"];
      }
      if(!empty($_POST["pswd"])){
        $pswd = $_POST["pswd"];
      }
      if(array_key_exists($user, $users) && $pswd==$users[$user]){
        echo 'Login successfull!
        <br>
        <a href="./remote_text.php">http://kappa.cs.petrsu.ru/~kulakov/courses/php/fortune.php</a>';
		$_SESSION['autorized'] = true;
        $_SESSION['username'] = $user;
      } else if (empty($_POST["usr"]) && empty($_POST["pswd"]) {
		  echo "";
	  } else {
        echo "Wrong username or password!";
		$_SESSION['autorized'] = false;
      }
    }
	?>