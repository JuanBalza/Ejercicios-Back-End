<?php
include('modelos/modelo.php');
//Definicion de la función
function traer_items(){
  $productos = model_traer_productos();
return $productos;
}


function traer_carrito(){

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "curso_backend";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM carritos";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
      // output data of each row
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
