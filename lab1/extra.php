<html>
    <head>
	<meta charset="utf-8">
	<title>Лаб 1, доп.</title>
	<style>
	    table{
		width:100%;
		background: white;
		color: black;
		border-spacing: 2px;
		}
	    td,th{
	    padding: 5px;
	    }
	</style>
</head>
<body>


<?php

include 'simple_start.php';

// $ans3 = var_dump($a==$str);
// $ans4 = var_dump($nol==$pusto);
// $ans41 = var_dump($nol===$pusto);
// $ans7 = var_dump($mas);
// $ans8 = settype($fl, "string"); 
// $ans81 = var_dump($fl);

$ans9 = implode(" ," ,$mas);

@$ans16 = $str.$nol+1;
$ans161 = $str.$nol.'1';

// символическая ссылка
$name = "a";

//ссылки
$ref=&$a;


for ($i = 1; $i <= 3; $i++) {
${"var".$i} = 0;
}

$mas_add = array("turth" => TRUE, 4 => -20, "pi" => 3.14); 
$sum_mas = $mas + $mas_add; 

$arr = [
		['number' => 'номер задания', 'solve' => "решение", 'answer' => "результат"],
		['number' => '1', 'solve' => 'echo $a $fl $boo $str;', 'answer' => "$a $fl $boo $str"],
		['number' => '2', 'solve' => "echo \$a + \$str;", 'answer' => $a+(int)$str],
		['number' => '3', 'solve' => "echo var_dump(\$a==\$str);", 'answer' => "bool(false)"],
		['number' => '4', 'solve' => "echo var_dump(\$nol==\$pusto); echo var_dump(\$nol===\$pusto)", 'answer' => "bool(true) bool(false)"],
		['number' => '5', 'solve' => "echo \$s1; echo \$s2;", 'answer' => "$s1 $s2"],
		['number' => '6', 'solve' => "echo \$mas[\"one\"], \$mas[2], \$mas[3];", 'answer' => "$mas[one] $mas[2] NULL"],
		['number' => '7', 'solve' => "echo var_dump(\$mas);", 'answer' => 'array(5) { ["one"]=> bool(true) [1]=> int(-20) ["three"]=> float(3.14) [2]=> string(3) "two" ["four"]=> int(4) }'],
		['number' => '8', 'solve' => "echo settype(\$fl, \"string\"); <br> echo var_dump(\$fl);", 'answer' => 'string(4) "3.14"'],
		['number' => '9', 'solve' => "\$ans9 = implode(\", \", \$mas);</", 'answer' => "$ans9"],
		['number' => '10', 'solve' => "echo \$name = \"a\"; <br> echo \${\$name};", 'answer' => "${$name}"],
		['number' => '11', 'solve' => "for (\$i = 1; \$i <= 3; \$i++) { <br>
 \${\"var\".\$i} = 0; <br>} <br> echo \$var1, \$var2, \$var3", 'answer' => "$var1 $var2 $var3"],
		['number' => '12', 'solve' => "echo \$ref=&\$a; \$ref = 20; echo \$a;'", 'answer' => $ref=20],
		['number' => '13', 'solve' => "echo HOST;", 'answer' => HOST],
		['number' => '14', 'solve' => "\$str1 = \$HOST; echo \$str1; \$str1 = @\$HOST; echo \$str1;", 'answer' => "Notice: Undefined variable: HOST in /home/02/defimova/public_html/lab1/extra.php on line 44"],
		['number' => '15', 'solve' => "\$file_list=`ls`;<br>echo \$file_list;", 'answer' => $file_list=`ls`],
		['number' => '16', 'solve' => "echo \$str.\$nol+1; <br> \$str.\$nol.'1';", 'answer' => "$ans16 <br> $ans161"],
		['number' => '17', 'solve' => '$mas_add = array("turth" => TRUE, 4 => -20, "pi" => 3.14); 
		      $sum_mas = $mas + $mas_add; var_dump($sum_mas);', 
		'answer' => 'array(8) { ["one"]=> bool(true) [1]=> int(-20) ["three"]=> float(3.14) [2]=> string(3) "two" ["four"]=> int(4) ["turth"]=> bool(true) [4]=> int(-20) ["pi"]=> float(3.14)}'],
	];

echo '<table border="10">';
	foreach ($arr as $user) {
		echo '<tr>';
		
		echo "<td>{$user['number']}</td>";
		echo "<td>{$user['solve']}</td>";
		echo "<td>{$user['answer']}</td>";
		
		echo '</tr>';
	}
	echo '</table>';
?>
</body>
