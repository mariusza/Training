<html>
<head>
<title>
	Zapis do pliku
</title>
</head>
<body>
<?php

$plik = fopen("plik_3.txt", "w+");
$zawartosc = "Wpisz ten tekst do pliku ";
$zawartosc .= "poniewaz bardzo chce go zobaczyc. Jak go nie zobacze to bede zly";
fwrite($plik, $zawartosc, 30);

?>
</body>
</html>