<!DOCTYPE html>
<html>
	<head>
		<meta charset = "utf-8">
		<title>1 lab extra Efimova</title>
	</head>
<body>
<table border = "10">
	<tr>
	</tr>
	<th>номер задания</th>
	<th>решение</th>
	<th>результат</th>
	
	<?php
	
	function print_solution($file)
	{
		// открываем для чтения
		$FILE = fopen($file, "r");
		if ($FILE) {
			// считываем первые три строки файла, так как они не нужны в таблице
			$str = fgets($FILE, 1024);
			$str = fgets($FILE, 1024);
			$str = fgets($FILE, 1024);
			// дальше считываем оставшиеся строчки файла, пока можем
			while (($str = fgets($FILE, 1024)) !== false) {
				echo $str, "<br>";
			}
			// закрываем файл
			fclose($FILE);
		}
	}
		
	for($i = 1; $i < 18; $i++){
		echo "<tr>";
		echo "<td>", $i, "</td>";
		echo  "<td>";
		print_solution($i . ".php");
		echo "</td>";
		// shell_exec — Выполняет команду через шелл и возвращает полный вывод в виде строки
		echo "<td>", shell_exec("php ". $i . ".php"), "</td>", "</tr>";
		}
	?>
</table>
</body>
</html>