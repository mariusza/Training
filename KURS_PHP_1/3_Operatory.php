<html>
<head>
<title>Trzecie zadanie - operatory</title>
</head>
<body>
<?php
$liczba_1 = 5435; //Przypisanie liczby 10 do zmiennej $liczba_1
$liczba_2 = 10;
$wartosc = $liczba_1 === $liczba_2;
echo $wartosc;

/* == - zwraca wartosc czy zmienne sa rowne (rozne typy)
   === - wraca wratosc czy zmienne sa rowne (ten sam typ)
*/

$wartosc = $liczba_1 xor $liczba_2;
echo $wartosc;
echo "<p>";

$ciag_1 = "Czesc ";
$ciag_2 = "Mariusz!";
$razem_ciagi = $ciag_1.$ciag_2;
echo $razem_ciagi;
echo "<p>";

$ciag_3 = "Marta jest ";
$ciag_4 = "Myszalke!";
$ciag_3 .= $ciag_4;
echo $ciag_3;

?>
</body>
</html>