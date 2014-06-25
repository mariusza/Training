<html>
<head>
	<title>
		Liczenie wyrazow
	</title>
</head>
<body>
<?php

$tekst = "Litwo, ojczyzno moja, ty jestes jak zdrowie";

$wyrazy = explode(" ", $tekst);

echo count($wyrazy);

?>
</body>
</html>