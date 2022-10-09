#!/usr/bin/php

<?php
$sock;

error_reporting(E_ALL ^ E_NOTICE);

// печать ответа от сервера, проверка на код возврата
function server_response($code) {
	global $sock;
	
	while (substr($ans, 3, 1) != ' ') {
	// fgets — Читает строку
	if (!($ans = fgets($sock, 256))) {
		echo '<p>'."Не удалось считать ответ"."</p>";
		return false;
		}
	}
	
	// str_replace — Заменяет все вхождения строки поиска на строку замены
	$ans = str_replace("\n", "", $ans); 
	echo '<p>'."Сервер: $ans"."</p>";
	if (substr($ans, 0, 3) <> $code) {
		echo '<p>'."Ой-ой, неожиданный код ответа от сервера!"."</p>";
		return false;
	}
	return true;
}


// печать запроса от клиента
function client_message($message) {
	global $sock;
    echo '<p>'."Клиент: $message".'</p>';
    fputs($sock, $message);
}

// принять запрос от клиента и отправка ответа
function request_answer($message, $code) {
	client_message($message);
    server_response($code);
}


// MAIN PART
//подключение к серверу, порт 25
if (!$sock = fsockopen('mail.cs.petrsu.ru', 25)){
	echo '<p>Сервер: Ошибка соединения!</p>';
	return;
} else {
	echo "<p>Сервер: Соединение с mail.cs.petrsu.ru</p>";
}

// код ответа от сервера должен быть 220
if (!server_response(220)) 
	return;

request_answer("HELO mail.cs.petrsu.ru\r\n", 250);
request_answer("MAIL FROM:<defimova@cs.karelia.ru>\r\n", 250);
request_answer("RCPT TO:<defimova@cs.karelia.ru>\r\n", 250);
request_answer("DATA\r\n", 354);
client_message("From: [Dasha] <defimova@cs.karelia.ru>\n");
client_message("To: <defimova@cs.karelia.ru>\n");
client_message("Subject: 3 lab web\n");
client_message("Hello! This is my message to you :)\n\n\n.\n");
request_answer("QUIT\n", 221);

fclose($sock);
?>