<html>
<head>
	<title>
		Rozlaczanie ciagow
	</title>
</head>
<body>
<?php

$dane = "Ala,ma,kota";

$dane_osobowe = explode(",", $dane);

for($i=0;$i<=2;$i++)
{
	echo $dane_osobowe[$i]." ";
}
?>
</body>
</html>