<html>
<head>
<title>Szoste zadanie</title>
</head>
<body>
<?php

$plik = fopen("C:/xampp/htdocs/pliki/imiona.txt", "r");
$odczyt = fread($plik, 8192);
echo $odczyt;
?>
</body>
</html>