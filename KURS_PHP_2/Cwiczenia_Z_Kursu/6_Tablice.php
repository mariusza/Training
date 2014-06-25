<html>
<head>
	<title>
		Tablice
	</title>
</head>
<body>
<?php
$tablica[0] = 1;
$tablica[1] = 2;
$tablica[2] = 3;
$tablica[3] = 4;

for($i=0;$i<4;$i++)
{
	echo $tablica[$i]."<br>";
}

echo "------------<br>";

$do_ilu_liczb = 40;

$i = 0; // zmienna pomocnicza / ile przebiegow
$j = 0; // zmienna iteracyjna / numerowanie tablicy

while ($i <= $do_ilu_liczb)
{
	if($i % 4 == 0)
	{
		$tablica[$j] = $i;
		$j++;
	}
	$i++;
}

for($j=0;$j<=10;$j++)
{
	echo $tablica[$j]."<br>";
}


?>
</body>
</html>