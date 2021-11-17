<?php


$enlace = mysqli_connect("localhost", "root", "", "curso_backend");
$data = $_POST;
$id_producto = $data['id'];
$id_usuario = $data['id_usuario'];
$precio = $data['precio'];
$nombre = $data['nombre'];
$imagen = $data['imagen'];


$sql = "INSERT INTO carritos (id_usuario, id_producto, precio, nombre, imagen)
VALUES ('$id_ususario', '$id_producto', '$precio', '$nombre', '$imagen')";

if ($enlace->query($sql) === TRUE {
  echo "new record create sucessfully";
} else {
  echo "Error: " .$sql ."<br>" . $enlace->error;
}

return;

 ?>
