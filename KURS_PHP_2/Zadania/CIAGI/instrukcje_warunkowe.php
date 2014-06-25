<html>
<head>
	<title>
		Zadanie z Instrukcjami
	</title>
</head>
<body>
<?php
	$ilosc = -5;

	$kontynuacja = ($ilosc == 0) ? '1' : '0';

	if ($kontynuacja == "0")	
	{
		if ($ilosc > 0)
		{
			while($ilosc > 0)
			{
				for($a=0;$a<=20;$a++)
				{
					echo $a;
				}
				echo "<br>";
				$ilosc--;
			}
		}
		else
		{
			while($ilosc < 0)
			{
				for($a=20;$a>=0;$a--)
				{
					echo $a;
				}
				echo "<br>";
				$ilosc++;
			}
		}
	}
	else
	{
		echo "Brak ciagow liczb";
	}

?>
</body>
</html>