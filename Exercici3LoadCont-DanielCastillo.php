<?php  
session_start();
if (isset($_SESSION["contar"])){ //Comprueba si el contador existe.
   $_SESSION["contar"]=$_SESSION["contar"]+1; //si existe añade una unidad al contador.
   }
else{
   $_SESSION["contar"]=1; //si no existe se crea con valor 1 inicial.
   }
$contar=$_SESSION["contar"]; //guarda en una variable.
?>

<html>
<head>
<title>Exercici 3, Load and Cont, Daniel Casillo</title> 
</head>
<body>
<h2>Contador de páginas:</h2>
Recargas: <?php echo "$contar"; ?> <br>
Recarga la página <a href="Exercici3LoadCont-DanielCastillo.php">aquí</a>.

<h2>Reiniciar el contador</h2>
<form action="Exercici3LoadCont-DanielCastillo.php" method="post">
Reiniciar contador: <input type="checkbox" name="reinicio"/> <br>
Enviar: <input type="submit" value="enviar"/>
</form>

<?php  
$reinicio=$_POST["reinicio"];

if($reinicio=1) {
   unset($_SESSION["contar"]);
   echo "La próxima vez que recargues la página el contador estará a 1";
   }
?>
</body>
</html>