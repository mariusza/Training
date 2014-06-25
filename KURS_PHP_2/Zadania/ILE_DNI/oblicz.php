<html>
<head>
	<title>
		Ile zyjesz dni? 
	</title>
</head>
<body>
<?php

function wypisz_dzien_tygodnia($data)
{
	switch(date("w", mktime (0,0,0,$data['miesiac'],$data['dzien'],$data['rok'])))
	{
		case '0':
			echo "Niedziela";
			break;
		case '1';
			echo "Poniedzialek";
			break;
		case '2':
			echo "Wtorek";
			break;
		case '3';
			echo "Sroda";
			break;		
		case '4':
			echo "Czwartek";
			break;
		case '5';
			echo "Piatek";
			break;	
		case '6';
			echo "Sobota";
			break;
	}
}

function oblicz_dni($data)
{
	$czas = (time() - mktime(0,0,0,$data['miesiac'],$data['dzien'],$data['rok']))/60/60/24;
	return $czas;
}

function pelnoletnosc_uzytkownika($data)
{
	$dorosly = (time() - mktime(0,0,0,$data['miesiac'],$data['dzien'],$data['rok']))/60/60/24/365;

	$doroslosc = ($dorosly >= 18) ? 'Jestes pelnoletni' : 'Jestes malolatem';
	return $doroslosc;
}

function dzien_matki($data)
{
	$ile_dni_od_dnia_matki = (time() - mktime(0,0,0,5	,26,2014))/60/60/24;
	$rok_biezacy = date("o");
	$tablica = array("Niedziela", "Poniedzialek", "Wtorek", "Sroda", "Czwartek", "Piatek", "Sobota");

	
	
	for($i=0;$i<10;$i++)
	{
		if($ile_dni_od_dnia_matki > 0) 
		{
			echo "26.05.".(++$rok_biezacy).": ".$tablica[date("w", mktime (0,0,0,5,26,$rok_biezacy))]."<br>";
		}
		else
		{
			echo "26.05.".$rok_biezacy.": ".$tablica[date("w", mktime (0,0,0,5,26,($rok_biezacy++)))]."<br>";
		}
	}
}

$data['dzien'] = $_GET['dzien'];
$data['miesiac'] = $_GET['miesiac'];
$data['rok'] = $_GET['rok'];

echo wypisz_dzien_tygodnia($data)."<br>";
echo oblicz_dni($data)."<br>";
echo pelnoletnosc_uzytkownika($data)."<br><br>";
echo dzien_matki($data);

?>
</body>
</html>