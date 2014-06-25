<?php
define("Koszulka", 19.99);
define("Spodnie", 49.99);
define("Czapka", 9.99);
define("Buty", 99.99);
define("Podatek_VAT", 0.23);

$ile_zamowionych_koszulek = $_POST['koszulki'];
$ile_zamowionych_spodni = $_POST['spodnie'];
$ile_zamowionych_czapek = $_POST['czapki'];
$ile_zamowionych_butow = $_POST['buty'];
$kwota = $_POST['kwota'];

$kwota_zamowionych_koszulek_netto = $ile_zamowionych_koszulek * Koszulka;
$kwota_zamowionych_spodni_netto = $ile_zamowionych_spodni * Spodnie;
$kwota_zamowionych_czapek_netto = $ile_zamowionych_czapek * Czapka;
$kwota_zamowionych_butow_netto = $ile_zamowionych_butow * Buty;

$suma_zamowienia_netto = $kwota_zamowionych_koszulek_netto + $kwota_zamowionych_spodni_netto + $kwota_zamowionych_czapek_netto + $kwota_zamowionych_butow_netto;
$suma_zamowienia_brutto = $suma_zamowienia_netto + $suma_zamowienia_netto * Podatek_VAT;

$reszta = $kwota - $suma_zamowienia_brutto;

?>
<html>
<head>
	<title>
		Obsluga zamowienia
	</title>
</head>
<body>
<?php

echo "Liczba zamowionych koszulek: ".$ile_zamowionych_koszulek."<br>";
echo "Liczba zamowionych spodni: ".$ile_zamowionych_spodni."<br>";
echo "Liczba zamowionych czapek: ".$ile_zamowionych_czapek."<br>";
echo "Liczba zamowionych butow: ".$ile_zamowionych_butow."<p>";
echo "Suma zamowienia netto: ".$suma_zamowienia_netto."<br>";
echo "Suma zamowienia brutto: ".$suma_zamowienia_brutto."<p>";

if ($kwota > $suma_zamowienia_brutto)
{
	echo "Reszta: ".$reszta;
}
else
{
	$potrzebne_pieniedza = $suma_zamowienia_brutto - $kwota;
	echo "Nie posiadasz tylu pieniedzy, potrzebujesz jeszcze ".$potrzebne_pieniedza;
}

?>
</body>
</html>