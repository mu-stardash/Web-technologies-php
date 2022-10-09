#!/usr/bin/php
# Efimova Darya 22405
<?php

include 'simple_start.php';

// === - тождественно равно (равны и имеют тот же тип)
// - implode/explode - формирует строку/массив из массива/строки
// символическая ссылка
$name = "a";

//@-подавляет вывод ошибки функции
//$str1=@$HOST;

for ($i = 1; $i <= 3; $i++) {
${"var".$i} = 0;
}

//файлы в текущей директории
//$file_list=`ls`;

//echo var_dump($argc); // количество переданных аргументов
//echo var_dump($argv); // для доступа к аргументам

echo '<table border="1">';
	echo '<tr> <td> номер задания</td><td> решение </td><td> результат</td></tr>';
	echo "<tr> <td>1</td> <td>"."echo \$a \$fl \$boo \$str;"."</td> <td>$a $fl $boo $str</td></tr>";
	echo "<tr> <td>2</td> <td>echo \$a + \$str;</td> <td>".($a+(int)$str)."</td></tr>";
	echo "<tr> <td>3</td><td>echo var_dump(\$a==\$str);</td><td>"; echo var_dump($a==$str); echo "</td></tr>";
	echo "<tr> <td>4</td><td>echo var_dump(\$nol==\$pusto); echo var_dump(\$nol===\$pusto)</td><td>"; echo var_dump($nol==$pusto); echo var_dump($nol===$pusto); echo "</td></tr>";
	echo "<tr> <td>5</td><td>echo \$s1; echo \$s2;</td> <td>$s1 $s2</td></tr>";
	echo "<tr> <td>6</td><td>echo \$mas[\"one\"], \$mas[2], \$mas[3];</td><td>"; echo $mas["one"],',' ,$mas[2],',' , @$mas[3],'' , "NULL"; echo "</td></tr>";
	echo "<tr> <td>7</td><td>echo var_dump(\$mas);</td><td>";echo var_dump($mas); echo "</td></tr>";
	echo "<tr> <td>8</td><td>echo settype(\$fl, \"string\"); <br> echo var_dump(\$fl);</td><td>";echo settype($fl, "string"); echo var_dump($fl); echo "</td></tr>";
	echo "<tr> <td>9</td><td>echo implode(\", \", \$mas);</td><td>"; echo implode(", ", $mas); echo "</td></tr>";
	echo "<tr> <td>10</td><td>echo \$name = \"a\"; <br> echo \${\$name};</td><td>${$name}</td></tr>";
	echo "<tr> <td>11</td><td>".'for ($i = 1; $i <= 3; $i++) {'."<br>".'
${"var".$i} = 0;'."<br>".'}'."<br>".'echo $var1, $var2, $var3,"\n";'."</td><td>$var1 $var2 $var3</td></tr>";
	echo "<tr> <td>12</td><td>echo \$ref=&\$a; \$ref = 20; echo \$a;'</td><td>"; $ref=&$a; $ref = 20; echo $a; echo "</td></tr>";
	echo "<tr> <td>13</td><td>echo HOST;</td><td>".HOST."</td></tr>";
	echo "<tr> <td>14</td><td>\$str1 = \$HOST; echo \$str1; \$str1 = @\$HOST; echo \$str1;</td><td>"; $str1 = $HOST; echo $str1; $str1 = @$HOST; echo $str1; echo "</td></tr>";
	echo "<tr> <td>15</td><td>\$file_list=`ls`;<br>echo \$file_list;</td><td>"; $file_list=`ls`; echo $file_list; echo "</td></tr>";
	echo "<tr> <td>16</td><td>echo \$str.\$nol+1; <br> \$str.\$nol.'1';</td><td>".@($str.$nol+1)."<br>".($str.$nol.'1')."</td></tr>";
	echo "<tr> <td>17</td><td>"; 
		echo '$mas_add = array("turth" => TRUE, 4 => -20, "pi" => 3.14); 
		      $sum_mas = $mas + $mas_add; var_dump($sum_mas);' ;
		echo "</td><td>";
		$mas_add = array("turth" => TRUE, 4 => -20, "pi" => 3.14); 
		      $sum_mas = $mas + $mas_add; var_dump($sum_mas);
		      
		echo "</td></tr>";

?>