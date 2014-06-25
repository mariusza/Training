<html>
<head>
<title>
	Czytanie pliku
</title>
</head>
<body>
<?php

$plik = fopen("plik.txt", "r");
$zawartosc = fread($plik, 8192);
echo $zawartosc;

?>
</body>
</html>