<html>
<head>
<title>
	Funkcja przyjmujaca argumenty
</title>
<body>
<?php

function kwadrat($bok)
{
	return $bok*$bok;
}

$bok = 5;
$wynik = kwadrat($bok);

echo $wynik."<br>";

function silnia($liczba)
{
	$wynik = 1;
	while($liczba > 1)
	{
		$wynik *= $liczba;
		$liczba--;
	}
	return $wynik;
}

$liczba = 5;
$wynik_2 = silnia($liczba);
echo "Silnia: ".$wynik_2;

?>
</body>
</html>