<html>
<head>
	<title>
		Szukanie podciagow
	</title>
</head>
<body>
<?php

$tekst = "Ucze sie dziennie w dziedzinie PHP.";

$czy = strpos($tekst, "cholera");

if ($czy == TRUE)
{
	echo "Tekst zawiera wulgarne slownictwo. Popraw tekst!";
}
else
{
	echo "Mozna wyswietlic tekst: ".$tekst;
}

?>
</body>
</html>