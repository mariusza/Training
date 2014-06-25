<html>
<head>
	<title>
		Tablice wielowymiarowe
	</title>
</head>
<body>
<?php

$tablica_ucznia[0] = "Jan";
$tablica_ucznia[1] = "Kowalski";
$tablica_ucznia[2] = "24-12-1992";

$tablica_klasy[0] = $tablica_ucznia;

$tablica_ucznia[0] = "Krzysiek";
$tablica_ucznia[1] = "Nowak";
$tablica_ucznia[2] = "24-12-1994";

$tablica_klasy[1] = $tablica_ucznia;

$tablica_ucznia[0] = "Ewa";
$tablica_ucznia[1] = "Kowalska";
$tablica_ucznia[2] = "17-03-1996";

$tablica_klasy[2] = $tablica_ucznia;

echo $tablica_klasy[1][0];

?>
</body>
</html>