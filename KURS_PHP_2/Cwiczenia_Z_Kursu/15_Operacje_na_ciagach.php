<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">

	<title>
		Operacje na ciagach
	</title>
</head>
<body>
<?php

//Wielkie litery
$tekst = "	bardzo lubie placki	";

$duze_litery = strtoupper($tekst);
echo $duze_litery."<br>";

//Male litery
$male_litery = strtolower($tekst);
echo $male_litery."<br>";

//Pierwsza wielka litera kazdego wyrazu
$pierwsza_wielka_litera = ucwords($tekst);
echo $pierwsza_wielka_litera."<br>";

//Sprawdzenie ilosci znakow w tekscie
$ilosc_znakow = strlen($tekst);

if ($ilosc_znakow < 20)
{
	echo $ilosc_znakow."<br>";
}
else
{
	echo "Za duzo znakow"."<br>";
}

//Usuwanie bialych znakow z poczatku i konca
$usuwanie_bialych_znakow = trim($tekst);
echo $tekst;
?>
</body>
</html>