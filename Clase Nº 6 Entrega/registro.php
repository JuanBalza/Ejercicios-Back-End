<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>shop - login</title>
        <link rel="icon" type="image/x-icon" href="Assets/img/favicon.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="Assets/css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <?php include('navbar.php') ?>
        <!-- Masthead-->
        <header class="masthead-login">
            <div class="container d-flex h-100 align-items-center">
              <div class="col-4">
                <div class="text-left">
                    <h1 class="mt-5 txt-black mb-4">Registro</h1>
                    <form method="post" action="registrarse.php">
                      <input type="text" name="dni" class="form-group" "form-control mb-4" placeholder="DNI">
                      <input type="text" name="nombre" class= "form-group" "form-control mb-4" placeholder="Nombre">
                      <input type="text" name="apellido" class= "form-group" "form-control mb-4" placeholder="Apellido">
                      <input type="text" name="email" class=  "form-group" "form-control mb-4" placeholder="E-mail">
                      <input type="text" name="telefono" class= "form-group" "form-control mb-4" placeholder="Teléfono">
                      <input type="text" name="calle" class= "form-group" "form-control mb-4" placeholder="Calle">
                      <input type="text" name="nro_calle" class= "form-group" "form-control mb-4" placeholder="Nº De Calle">
                      <input type="text" name="ciudad" class= "form-group" "form-control mb-4" placeholder="Ciudad">
                      <input type="text" name="cod_postal" class= "form-group" "form-control mb-4" placeholder="Codigo Postal">
                      <input type="password" name="password" class= "form-group" "form-control mb-4" placeholder="Contraseña">
                      <input type="password" name="password2" class= "form-group" "form-control mb-4" placeholder="Confirmar Contraseña">
                      <button type="submit" class="btn btn-login btn-block">Registrarse</button>
                      <h5 class="mt-3">¿Ya ténes cuenta? <a href="login.php">Inicia Sesion</a> </h5>
                    </form>
                </div>
              </div>
            </div>
        </header>


        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="Assets/js/scripts.js"></script>
    </body>
</html>
