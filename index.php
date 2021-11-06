<?php

include("conex.php");
$link=Conectarse();


if ($activo = 1) {
    $activo = 1;

    $resultado=mysqli_query($link,"select * from producto ");
while($filas = mysqli_fetch_array($resultado)){
    
$id=$filas["id"];
$n=$filas["nombre"];
$a=$filas["apellido"];
$e=$filas["edad"];
echo $id." ".$n." ".$a." ".$e."<br>";
}
mysqli_close($link);
?>
}

$id=$_POST['txtId'];
$nom=$_POST['txtNom'];
$descripcion=$_POST['txtDescripcion'];
$precio=$_POST['txtPrecio'];
$stock=$_POST['txtStock'];
echo $stock;
$img1=$_POST['txtImagen1'];
$img2=$_POST['txtImagen2'];
$img3=$_POST['txtImagen3'];

if ($stock > 0) {
    $activo = 1;
}



mysqli_query($link,"insert into producto(id_producto, nombre, descripcion, precio, stock, activo,imagen1,imagen2,imagen3) VALUES ($id,'$nom','$descripcion',$precio,$stock,$activo,'$img1','$img2','$img3') ");




mysqli_close($link);
?>
