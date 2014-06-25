<html>
<head>
	<title>
		Wyrazenia regularne
	</title>
</head>
<body>
<?php

$_imie = $_POST['imie'];
$_nazwisko = $_POST['nazwisko'];
$_email = $_POST['email'];

$sprawdz = "^[A-Z][a-z]+$";
$sprawdz_2 = "^[A-z][a-z0-9]+\@[a-z0-9]+\.[a-z]{2,4}$";

if(ereg($sprawdz, $_imie))
{
	if(ereg($sprawdz, $_nazwisko))
	{
		if(ereg($sprawdz_2, $_email))
		{
			echo "Podano poprawne dane"."<br>";
		}
		else
		{
			echo "Zly format adresu email"."<br>";
		}
	}
	else
	{
		echo "Podano niepoprawne nazwisko"."<br>";
	}
}
else
{
	echo "Podano niepoprawne imie"."<br>";
}


?>
</body>
</html>