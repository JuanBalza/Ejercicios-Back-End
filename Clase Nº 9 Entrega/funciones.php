<?php
include("modelos/modelo.php")

function traer_productos() {

$productos = [
['nombre' => 'Papas Fritas', 'precio' => 100 , 'imagen' => 'Assets/img/papas-fritas.png'],
['nombre' => 'Ensalada', 'precio' => 300 , 'imagen' => 'Assets/img/ensalada.png'],
['nombre' => 'Pizza', 'precio' => 500 , 'imagen' => 'Assets/img/pizza.png'],
['nombre' => 'Sandwich', 'precio' => 300 , 'imagen' => 'Assets/img/sandwich.png'],
['nombre' => 'Hamburguesa', 'precio' => 350 , 'imagen' => 'Assets/img/hamburguesa.png'],
['nombre' => 'Galletitas', 'precio' => 200 , 'imagen' => 'Assets/img/galletitas.png'],
['nombre' => 'Panchos', 'precio' => 100 , 'imagen' => 'Assets/img/pancho.png'],
['nombre' => 'Dona', 'precio' => 100 , 'imagen' => 'Assets/img/dona.png'],
];
return ($productos);

}




function traer_carrito() {
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "curso_backend";

  //create connection
  $conn = mysqli_connect ($servername, $username, $password, $dbname);
  //Check connection
  if (!$conn) {
    die("connectio failed: " .mysqli_connect_error());
  }

  $sql = "SELECT * FROM carritos";
  $result = mysqli_query($conn, sql);

  if (mysqli_num_rows($result) > 0) {
    //outpot data of each row
    while($row = mysqli_fetch_assoc($result)) {
    $carrito[] = $row;
  }
  } else {
    echo "0 results";
  }
  return $carrito;

  mysqli_close($conn);

}
 ?>
