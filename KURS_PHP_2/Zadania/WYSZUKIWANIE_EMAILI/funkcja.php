<html>
<head>
<title>
	Wyszukiwanie emaili i zapisywanie ich do pliku
</title>
</head>
<body>
<?php

function zdobadz_email($moj_plik_z_mailami)
{
	//sprawdzanie emaila
	$sprawdz = "^[A-z][a-z0-9]+\@[a-z0-9]+\.[a-z]{2,4}$";

	//otwarcie pliku strony
	$plik = fopen($moj_plik_z_mailami,"r");
	$wynik = "";

	//utworzenie pliku tymczasowego i nadanie prawa do zapisu
	if(file_exists("tymczasowy_plik.txt"))
	{
		return true;
	}
	else
	{
		$moj_plik = fopen("tymczasowy_plik.txt","a+");	
	}

	//$otwarcie_pliku_tymczasowego = fopen("tymczasowy_plik.txt","r+");
	
	//rewind($plik);

	//przeszukanie pliku wyrazeniem regularnym
	while(!feof($plik))
	{
		$linia = fgets($plik);
		
		if(ereg($sprawdz, $linia))
		{
			fputs($moj_plik, $linia);
		}
	}

	fclose($plik);

	//wskaznik jest na koncu przerzucamy go na poczatek
	//rewind($moj_plik);

	echo "Adresy email: "."<br>";
	$czytanie = fopen("tymczasowy_plik.txt", "r");
	$zawartosc = fread($czytanie, 8192);
	echo $zawartosc;

	fclose($moj_plik);
}

?>
</body>
</html>