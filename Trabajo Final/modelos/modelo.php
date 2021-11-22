<?php
  function model_traer_productos(){
  //Credenciales
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "curso_backend";
  // Se Crea la Conección
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  $sql = "SELECT * FROM productos";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      $productos[] = $row;
    }
  } else {
    echo "0 results";
  }

  return $productos;
}


//Carrito
function get_carrito_db(){
}
