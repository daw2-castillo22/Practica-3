<html>
<head>
<title>Exercici 3, Format Text, Daniel Casillo</title>
</head>
<body>

<form action="Exercici3FormatTextSave-Danielcastillo.php" method="post">
Color: <input type="color" name="color"><br><br>
Font: <input type="text" name="font"><br><br>
Size: <input type="number" name="size"><br><br>
Text: <input type="text" name="text"><br><br>
Save? <input type="checkbox" name="save"><br><br>
      <input type="submit" value="Send">
</form>

<?php
$color=$_POST["color"];
$size=$_POST["size"];
$font=$_POST["font"];
$text=$_POST["text"];
$save=$_POST["save"];

if($save=1){
setcookie("color","$color");
setcookie("size","$size");
setcookie("font","$font");
setcookie("text","$text");

echo "Data saved successfully! <br><br>";
echo "$color , $size , $font, $text";
}

echo "<h1 style='color:$color; font-family:$font; size:$size'>$text</h1>";
?>

</body>
</html>