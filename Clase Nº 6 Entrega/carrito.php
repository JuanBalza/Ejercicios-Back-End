<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>shop - carrito</title>
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
        <!-- Carrito-->
        <section class="carrito-section" id="carrito">
            <div class="container">
                <div class="row mx-auto text-center">
                  <h3 class="mb-4"><i class="fas fa-shopping-basket fa-lg pr-3"></i>carrito de compras</h3>
                </div>
                <div class="row">
                  <div class="container">
                    <table class="table">
                      <thead>
                        <tr>
                          <th class="col-1"></th>
                          <th class="col-6 text-left">producto</th>
                          <th class="col-1 text-center">cantidad</th>
                          <th class="col-2 text-center">precio</th>
                          <th class="col-2 text-center">subtotal</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="align-middle"><img src="Assets/img/ensalada.png" /></td>
                          <td class="align-middle text-left">Ensalada</td>
                          <td class="align-middle text-center">
                            <input type="number" class="form-control" placeholder="01" id="cantidad">
                          </td>
                          <td class="align-middle text-center">$300</td>
                          <td class="align-middle text-center">$300</td>
                        </tr>
                        <tr>
                          <td class="align-middle"><img src="Assets/img/pizza.png" /></td>
                          <td class="align-middle text-left">Pizza</td>
                          <td class="align-middle text-center">
                            <input type="number" class="form-control" placeholder="01" id="cantidad">
                          </td>
                          <td class="align-middle text-center">$500</td>
                          <td class="align-middle text-center">$800</td>
                        </tr>
                      </tbody>
                    </table>


                  </div>
                </div>
                <div class="row justify-content-end">
                  <button class="btn btn-comprar">Iniciar compra</button>
                </div>
            </div>
        </section>
        <div class="fluid-container img-footer"></div>



        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="Assets/js/scripts.js"></script>
    </body>
</html>
