<html>
<head>
<title>
	Wysylanie email
</title>
</head>
<body>
<?php
//Przykladowa wiadomosc email
$adres = "marioczeski@gmail.com";
$tytul = "przykladowy email";
$wiadomosc = "czesc";

mail($adres, $tytul, $wiadomosc);
?>
</body>
</html>