<html>
<head>
<title>Exercici 3, Dates, Daniel Castillo</title>
</head>
<body>
<div style="text-align: center">
<p> You don't know what time, day, month or year is it? Don't worry, this is your site!<br/>
<br>
<?php
date_default_timezone_set("America/New_York");
echo "Yesterday it was ";
echo date("d")-1;
echo " of ";
echo date("m");
echo " of ";
echo date("Y");
echo "<br><br>";

$mes_anterior = date("F", strtotime("-1 month"));
echo "The previous month is ";
echo $mes_anterior;
echo ("<br><br>");

$numero=cal_days_in_month(CAL_GREGORIAN,10,2021);
echo "There are ";
echo $numero-date("j");
echo " days left on this month";
echo "<br><br>";

echo "There are ";
echo 12-date("n");
echo " months left this year";

?>
<br/>
</div>
</body>
</html>