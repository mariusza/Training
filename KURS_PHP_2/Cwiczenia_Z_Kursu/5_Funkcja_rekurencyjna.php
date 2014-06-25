<html>
<head>
	<title>
		Funkcja rekurencyjna
	</title>
</head>
<body>
<?php

function silnia($liczba)
{
	if ($liczba < 2)
	{
		return 1;
	}
	else
	{
		return $liczba * silnia($liczba - 1);
	}
}

echo silnia(5);

?>
</body>
</html>