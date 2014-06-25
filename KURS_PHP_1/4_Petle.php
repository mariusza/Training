<html>
<head>
<title>Czwarte zadanie</title>
</head>
<body>
<?php
//Petla - IF
$ocena = 6;

if ($ocena > 1 && $ocena < 6) 
{
	if ($ocena == 5)	
		{
			echo "Bardzo dobry";
		}
		elseif ($ocena == 4) 
		{
			echo "Dobry";
		}
		elseif ($ocena == 3) 
		{
			echo "Dostateczny";
		}
		else 
		{
			echo "Nie zdales";
		}
}
else
{
	echo "Blad przy podaniu oceny";
}

//Petla - FOR

echo "<p>";
for($liczba=1;$liczba<4;$liczba++) 
{
	echo $liczba."<p>";
}

echo "------<p>";
//Petla - WHILE

$liczba_1 = 10;

while($liczba_1<=30)
{
	echo $liczba_1."<p>";
	//$liczba_1 = $liczba_1 + 10;
	$liczba_1+=10;
}

echo "------<p>";

//Petla - DO WHILE

$liczba_2 = 10;

do
{
	echo $liczba_2."<p>";
	$liczba_2+=10;
}
while ($liczba_2 <= 30);
//DO WHILE - zawsze wykona sie chociaz 1. 
echo "------<p>";

//Petla - FOREACH ... UZUPELNIC!

//Petla - SWITCH CASE

$wzrost = 160;

switch ($wzrost)
{
	case '160':
		echo "Jestes niski";
		break;
	case '170';
		echo "Jestes sredni";
		break;
	case '180';
		echo "Jestes wysoki";
		break;
}

?>
</body>
</html>