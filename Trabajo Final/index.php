<!DOCTYPE html>
<html lang="en">

<?php include('header.php'); ?>

<?php include('funciones.php');
$productos = traer_items(); ?>

        <!-- Navigation-->

    <?php session_start(); var_dump($_SESSION);
          if ($_SESSION['user'] != "") {
          include ('navbar_logueado.php');
        } else {
          include ('navbar_nologueado.php');
        }
        ?>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container d-flex h-100 align-items-center">
              <div class="col-6 mx-auto">
                <div class="text-left">
                    <h1 class="my-0">Comprá online desde tu casa.</h1>
                    <h2 class="mt-3 mb-5">¡Nosotros te lo llevamos!</h2>
                </div>
              </div>
              <div class="col-6">
                <img src="Assets/img/hero.png"/>
              </div>

            </div>
        </header>
        <!-- Productos-->
        <?php include('productos.php'); ?>
        <!-- Contacto-->
          <?php include('contacto.php'); ?>

        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="../Assets/js/scripts.js"></script>
    </body>
</html>
