<?php

// CDATA означает Персональные данные, и это означает, 
//что данные между этими строками включают данные, 
//которые могут быть интерпретированы как разметка XML, но не должны быть.

//Таким образом, CDATA означает, что он игнорирует любой символ, который в противном случае можно было бы интерпретировать как XML-тэг типа < и > и т.д.

//проверка на открытие xml-файла
if (file_exists('test.xml'))
{
    // simplexml_load_file — Интерпретирует XML-файл в объект
    $file = simplexml_load_file("test.xml");
} else {
    exit('Файл не удается открыть!');
}

function moderation($str, $encoding='UTF-8')
{
	// preg_replace — Выполняет поиск и замену по регулярному выражению
	// mb_strtoupper — Приведение строки к верхнему регистру
	// mb_substr — Возвращает часть строки
	// mb_strlen - Получает длину строки
	
	// удаляем лишние пробелы из строки
        // \s - любой пробельный символ
    $str = preg_replace('/\s\s+/', ' ', $str);
	// первую букву делаем заглавной + добавляем остальную часть строки
    $str = mb_strtoupper(mb_substr($str, 0, 1, $encoding), $encoding).
           mb_substr($str, 1, mb_strlen($str), $encoding);
    return $str;
}

echo '<html>
<title>2 lab Efimova</title>
<head>
<meta charset="utf-8">
</head>
<body>
<ol style="list-style-type: upper-roman">';

echo $file;

// проходим по тегам <question>
foreach($file->question as $question){
    echo "<li>";
    echo moderation($question->name);
    echo "<ol>";
    // проходим по тегам <answer>
    foreach($question->answer as $a){
		// htmlentities — Преобразует все возможные символы в соответствующие HTML-сущности
		$answer = htmlentities($a, ENT_QUOTES | ENT_IGNORE);
        echo "<li>".moderation($answer);                                                                                                            
    }
    echo "</ol>"."</li>";
}

echo "</ol></fielset></form>";
echo "</body></html>\n" ;

?>