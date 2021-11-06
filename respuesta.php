<?php

include("conex.php");
$link=Conectarse();
$nom=$_GET['nomb'];
$resultado=mysqli_query($link,"select * from persona where nombre='$nom' ");
while($filas = mysqli_fetch_array($resultado)){
$id=$filas["id"];
$n=$filas["nombre"];
$a=$filas["apellido"];
$e=$filas["edad"];
echo $id." ".$n." ".$a." ".$e."<br>";
}
mysqli_close($link);
?>