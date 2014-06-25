<html>
<head>
<title>Piate zadanie</title>
</head>
<body>
<?php

$tablica[0]=1;
$tablica[1]=2;
$tablica[2]=3;
$tablica[]=4;

//Wyświetlenie tablicy (znamy ile rekordow jest)
for($i=0;$i<=3;$i++)
{
	echo $tablica[$i]."<p>";
}

//Wyswietltnie tablicy nie znajac ile rekordow posiada
for($j=0;$j<sizeof($tablica);$j++)
{
	echo "Argumentem o numerze ".$j." w tablicy jest: ".$tablica[$j]."<p>";
}

echo "<p>";

//Tablice asocjacyjne - Zamiast indeksow liczbowych wystepuja indeksy tekstowe
echo "<p>----------<p>";

$tablica_2 = array (
	'imie' => 'Mariusz',
	'nazwisko'  => 'Adamczewski',
	'data_urodzenia' => '1992-03-28'
);
echo "<p>Informacje o mnie:<p>";

foreach($tablica_2 as $wartosc)
{
	echo $wartosc."<p>";
}

echo "<p>----------<p>";

foreach($tablica_2 as $klucz => $wartosc)
{
	echo $klucz." : ".$wartosc."<p>";
}
?>
</body>
</html>