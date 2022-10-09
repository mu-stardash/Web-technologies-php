<html>
<head>
  <title>laba3 cookies</title>
</head>
<body>
  <?php
  // isset — Определяет, была ли установлена переменная значением, отличным от null
  // $_COOKIE['count'] - ассоциативный массив (array) значений, переданных скрипту через HTTP Cookies
  if (!isset($_COOKIE['count'])){
    echo "Добро пожаловать!";
    $cookie = 1;
	// setcookie — Отправляет cookie
	// cрок действия 60 секунд
    setcookie("count", $cookie, time() + 60);
  } else {
    $cookie = $_COOKIE['count']+1;
    setcookie("count", $cookie, time() + 60);
    echo "Рады видеть вас снова! Это ваш $cookie визит.";
  }
  ?>
</body>
