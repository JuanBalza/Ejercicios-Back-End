<?php
$data = $_POST;
if ($data ['password'] != $data['password2']) {
  echo "<h1>las contraseñas coinciden</h1>";
  header( "refresh:2,url=registro.php");
} else {
  $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
}

unset($data['password2']);
$data ['habilitado'] = true;

$enlace = mysqli_connect("localhost", "root", "", "curso_backend");
if (!$enlace) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

$dni = $data['dni'];
$telefono =$data['telefono'];
$nombre = $data['nombre'];
$apellido = $data['apellido'];
$email = $data['email'];
$calle = $data['calle'];
$nro_calle = $data['nro_calle'];
$ciudad = $data['ciudad'];
$password = $data['password'];
$habilitado = $data['habilitado'];
$cod_postal = $data['cod_postal'];

$sql = "INSERT INTO usuarios (dni, nombre, apellido, email, telefono, calle, nro_calle, ciudad, password, habilitado, cod_postal)
VALUES ('$dni', '$nombre', '$apellido', '$email', '$telefono', '$calle', '$nro_calle', '$ciudad', '$password', '$habilitado', '$cod_postal')";

if (mysqli_query($enlace, $sql)) {
  echo "Usuario registrado correctamente!";
} else {
  echo "error:" .$sql . "<br>" . mysqli_error($enlace);
}
?>
