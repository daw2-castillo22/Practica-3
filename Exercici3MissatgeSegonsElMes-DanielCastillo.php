<html>
<head>
<title> Exercici 3, Missatge segons el mes, Daniel Casillo</title>
</head>
<body>

<?php
date_default_timezone_set("America/New_York");
echo "The currently month is: ";
echo date(" F");
echo "<br>";
$mesnumero=date("m");
if($mesnumero>3 && $mesnumero<6){
	echo " We're in SPRING!";
}else if($mesnumero>6 && $mesnumero<9){
	echo " We're in SUMMER!";
}else if($mesnumero>9 && $mesnumero<12){
	echo " We're in AUTUMN!";
}else if($mesnumero<12 && $mesnumero<3){
	echo " We're in WINTER!";
}
?>

</body>
</html>