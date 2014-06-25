<html>
<head>
	<title>
		Tablice z zdefiniowanymi indeksami
	</title>
</head>
<body>
<?php

$tablica_ucznia['imie'] = "Janek";
$tablica_ucznia['nazwisko'] = "Kowalski";
$tablica_ucznia['data_ur'] = "14-10-1995";

$tablica_klasy[0] = $tablica_ucznia;

$tablica_ucznia['imie'] = "Krzysiek";
$tablica_ucznia['nazwisko'] = "Nowak";
$tablica_ucznia['data_ur'] = "24-12-1994";

$tablica_klasy[1] = $tablica_ucznia;

$tablica_ucznia['imie'] = "Ewa";
$tablica_ucznia['nazwisko'] = "Kowalska";
$tablica_ucznia['data_ur'] = "17-03-1996";

$tablica_klasy[2] = $tablica_ucznia;

echo $tablica_klasy[1]['imie'];
echo "<p>";

for	($i=0;$i<=2;$i++)
{
	echo $tablica_klasy[$i]['imie']."<br>";
}

?>
</body>
</html>