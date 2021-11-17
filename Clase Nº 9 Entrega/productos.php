<?php include('navbar.php') ?>

<?php
$productos = array();
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
 ?>



 <section class="productos-section" id="productos">
   <div class="container">
     <div class="row mx-auto text-center">
       <div class="col-lg-8 mx-auto">
         <h3 class="mb-4">Nuestros Productos</h3>
       </div>
     </div>
     <div class="row align-items-end">

       <?php foreach($productos as $producto){ ?>
       <div class="col-xl-3 col-6 mt-4">
         <div class="producto text-center p-4">
             <img src="img/<?php echo $producto['imagen'];?>.png"/>
             <h4 class="text-left"><?php echo $producto['nombre']; ?></h4>
             <h5 class="text-left">$<?php echo $producto['precio']; ?></h5>
           <button data-id="<?php echo $producto['id'];?>" data-precio="<?php echo $producto['precio'];?>" data-nombre="<?php echo $producto['nombre'];?>" data-imagen="<?php echo $producto['imagen'];?>"  class="btn btn-agregar">Agregar</button>
         </div>
       </div>
       <?php } ?>

     </div>
   </div>
   </div>
 </section>
