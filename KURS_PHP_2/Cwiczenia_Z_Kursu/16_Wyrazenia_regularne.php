<html>
<head>
	<title>
		Wyrazenia regularne
	</title>
</head>
<body>
<?php

$wyrazenie = "/{o,0}/";
$tekst = "ola";

if(preg_match($wyrazenie, $tekst))
{
	echo "Tekst zawiera male litery tylko.";
}
else
{
	echo "Tekst zawiera dodatkowe znaki.";
}

?>
</body>
</html>