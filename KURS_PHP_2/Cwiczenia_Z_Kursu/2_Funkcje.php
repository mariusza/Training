<html>
<head>
<title>
	Funkcje
</title>
<body>
<?php

function wyswietl_powitanie()
{
	echo "Witam!";
	echo "Zaloguj Sie!";
}

wyswietl_powitanie();
wyswietl_powitanie();
wyswietl_powitanie();

echo "<p>";

function tresc_powitania()
{
	return "Witam wszystkich!";
}

$powitanie = tresc_powitania();
echo $powitanie."<p>";

function oblicz()
{
	$zmienna = 3;
	$zmienna += 5;
	$zmienna++;
	return $zmienna;
}

$liczba = oblicz();

if (oblicz() > 5)
{
	echo "Dana liczba to: ".$liczba." oraz Funkcja zwraca wartosc wieksza od 5";
}
else
{
	echo "Dana liczba to: ".$liczba." oraz Funkcja wraca wartosc mniejsza od 6";
}

?>
</body>
</html>