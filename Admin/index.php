<?php

session_start();

$nombreUsuario=$_SESSION["username"];




if(!isset($_SESSION["username"]))

{

	header("location:login.php");

}





?>









<?php include('template/cabecera.php'); ?>

<div class="col-md-12">
      <div class="jumbotron">
          <h1 class="display-3">Bienvenido <?php echo $nombreUsuario; ?></h1>
          <p class="lead">Vamos a administrar nuestros Productos en el sitio web</p>
          <hr class="my-2">
          <p>More info</p>
          <p class="lead">
              <a class="btn btn-primary btn-lg" href="seccion/productos.php" role="button">Administrar Productos</a>
          </p>
      </div>
</div>
<?php include('template/pie.php'); ?>
