<html>
<head>
	<title>
		Laczenie ciagow
	</title>
</head>
<body>
<?php

$zmienna = "Ala";
$zmienna .= " ma ";
$zmienna .= " kota."."<br>";

echo $zmienna."<br>";

$tablica[0] = "28";
$tablica[1] = "03";
$tablica[2] = "1992";
$polacz_tablice = implode(" - ", $tablica);

echo $polacz_tablice;
?>
</body>
</html>