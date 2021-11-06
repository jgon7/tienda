<?php

include("conex.php");
$link=Conectarse();
$id=$_POST['txtUser'];
echo $id;
$pass=$_POST['txtPass'];
$nom=$_POST['txtNom'];
$ape=$_POST['txtApe'];
$dir=$_POST['txtDir'];
$mail=$_POST['txtMail'];

mysqli_query($link,"insert into cliente(id_cliente, nombre, apellido, email, password, direccion) VALUES ($id,'$nom','$ape','$mail','$pass','$dir') ");


mysqli_close($link);
?>