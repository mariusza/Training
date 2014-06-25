<html>
<head>
<title>
	Funkcja przyjmujaca argumenty
</title>
<body>
<?php

function powitanie_imieniem($imie)
{
	echo "Witaj ".$imie;
}

$imie = "Marcin";
powitanie_imieniem($imie);

?>
</body>
</html>