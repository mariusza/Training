<html>
<head>
<title>Drugie zadanie</title>
</head>
<body>
<?php
// $zmienna, $ZmIeNNa, $ZMIENNA - nie przechowuje tych samych danych

$tekst = "Ala ma kota, kot ma Ale<p>";
echo $tekst;

$liczba_1 = 15;
$liczba_2 = 5;

$suma = $liczba_1 + $liczba_2;
$roznica = $liczba_1 - $liczba_2;
$iloczyn = $liczba_1 * $liczba_2;
$iloraz = $liczba_1 / $liczba_2;
$reszta_z_dzielenia = $liczba_1 % $liczba_2;

echo ("Suma: $suma". "	Roznica: $roznica". "	Iloczyn: $iloczyn". "	Iloraz: $iloraz". "	Reszta: $reszta_z_dzielenia");

/*
int integer - całkowite
double float real - rzeczywiste
string - ciag
array - tablica
object - obiekt
*/
$tekst = "przytulanie";
echo "Kocham ".$tekst;


echo "<p>";

$liczba_3 = 20.5;
//zmiana typu liczby
settype($liczba_3, "int");
echo "$liczba_3<p>";

echo $_SERVER['DOCUMENT_ROOT'];
echo "<p>";
echo $_SERVER['SERVER_PORT'];

echo "<p>";

$szklanka = "herbata";
echo $szklanka;

echo "<p>";

$szklanka = "kawa";
echo $szklanka;
//Stale - pobieraja 2 argumenty - nazwe stalej i jej wartosc

echo "<p>";
define("CZESC", "Witam!");
echo CZESC;

?>
</body>
</html>