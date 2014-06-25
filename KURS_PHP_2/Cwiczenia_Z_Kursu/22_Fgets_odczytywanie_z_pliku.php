<html>
<head>
<title>
	Czytanie pliku
</title>
</head>
<body>
<?php

$plik = fopen("plik_2.txt", "r+");
$zawartosc = "";

//gets - linia getc - znak
while(!feof($plik))
{
	$linia = fgets($plik);
	$zawartosc .= $linia;
}

echo $zawartosc;

?>
</body>
</html>