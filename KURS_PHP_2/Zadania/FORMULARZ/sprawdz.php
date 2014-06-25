<html>
<head>
<title>
	Formularz kontaktowy
</title>
</head>
<body>
<?php

function sprawdz_imie($imie)
{
	$sprawdz = "^[A-Z][a-z]+$";

	if(ereg($sprawdz, $imie))
	{
		return true;
	}
	else
	{
		return false;
	}
}

function sprawdz_telefon($telefon)
{
	$sprawdz = "^[0-9]{9}$";

	if (ereg($sprawdz, $telefon))
	{
		return true;
	}
	else
	{
		return false;
	}

}

function sprawdz_email($email)
{
	$sprawdz = "^[A-z][a-z0-9]+\@[a-z0-9]+\.[a-z]{2,4}$";

	if(ereg($sprawdz, $email))
	{
		return true;
	}
	else
	{
		return false;
	}
}

function sprawdz_tekst($tresc)
{
	$tresc = trim($tresc);

	if((strlen($tresc)) >= 50)
	{
		return false;
	}
	else
	{
		return true;
	}
}

$imie = $_POST['imie'];
$telefon = $_POST['telefon'];
$email = $_POST['email'];
$tresc = $_POST['tresc'];
$blad_danych = false;

if(!sprawdz_imie($imie))
{
	echo "Niepoprawny format imienia"."<br>";
	$blad_danych = true;
}

if(!sprawdz_telefon($telefon))
{
	echo "Niepoprawny format telefonu"."<br>";
	$blad_danych = true;
}

if(!sprawdz_email($email))
{
	echo "Niepoprawny format emailu"."<br>";
	$blad_danych = true;
}

if(!sprawdz_tekst($tresc))
{
	echo "Niepoprawna tresc"."<br>";
	$blad_danych = true;
}

if($blad_danych)
{
	echo "Wystapilo jedno lub wiecej bledow"."<br>";
}
else
{
	echo "Imie klienta: ".$imie."<br>";
    echo "Adres e-mail: ".$email."<br>";
    echo "Numer telefonu: ".$telefon."<br>";
    echo "Tresc: ".$tresc;
}

?>
</body>
</html>