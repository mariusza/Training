<html>
<head>
	<title>
		Data i czas
	</title>
</head>
<body>
<?php

$data = date("Y-m-d");
$czas = date("H:i");

echo "Strone wyswietlono dnia $data o godzinie $czas<p>";

$data = date("Y-m-d, H:i", mktime (0,0,0,6,1,2014));

echo $data;

?>
</body>
</html>