<html>
<head>
<title>
	Wysylanie email
</title>
</head>
<body>
<?php

$od = "From: adamczewski.mariusz@gmail.com\r\n";
$od .= 'MIME-Version: 1.0'."\r\n";
$od .= 'Content-type: text/html; charset=iso-8859-2'."\r\n";
$adres = "marioczeski@gmail.com";
$tytul = "hej";

$wiadomosc = '
<html>
<head>
</head>
<body>
<b>Witam!</b><br/>
Zapraszam na strone: <a href="http://wp.pl">WP</a>
</body>
</html>
';

mail($adres, $tytul, $wiadomosc, $od);

?>
</body>
</html>