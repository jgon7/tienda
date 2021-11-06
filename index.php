<?php

include("conex.php");
$link=Conectarse();


if ($activo = 1) {
    $activo = 1;

    $resultado=mysqli_query($link,"select * from producto where activo=1");
while($filas = mysqli_fetch_array($resultado)){
   
$id=$filas["id_producto"];
$n=$filas["nombre"];
$a=$filas["descripcion"];
$e=$filas["precio"];
$e=$filas["stock"];
$e=$filas["activo"];
$e=$filas["imagen1"];
$e=$filas["imagen2"];
$e=$filas["imagen3"];
echo $id." ".$n." ".$a." ".$e."<br>";
}
mysqli_close($link);
?>


