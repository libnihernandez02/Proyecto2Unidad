<!DOCTYPE html>

	<?php
	session_start();
	if (@!$_SESSION['user']) {
		header("Location:index.php");
	}elseif ($_SESSION['rol']==1) {
		header("Location:admin.php");
	}
	?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Lian cake academ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Ethan Rodriguez y Libni Hernandez">

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>


    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  </head>
<body data-offset="40" background="images/fondo4.jpg" style="background-attachment: fixed">
<div class="container">
<header class="header">
<div class="row">
	<?php
	include("include/cabecera.php");
	?>
</div>
</header>

  
<?php

include("include/menu.php");

?>


<div id="myCarousel" class="carousel slide homCar">
		<div class="carousel-inner" style="border-top:18px solid #222; border-bottom:1px solid #222; border-radius:4px;">
		  <div class="item active">
			<img src="images/pascomputacion.jpg" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>Comptación Básica</h4>
				  <p>
				   recuerde que en esta disciplina la práctica es la que da el dominio en el uso de las herramientas, estaremos siempre a la orden para compartir con usted experiencias y sobretodo para ayudarlo en el aprendizaje.
				  </p>
			</div>
		  </div>
		  <div class="item">
			<img src="images/pastopografia.jpg" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>Topografía</h4>
				  <p>
				  La topografía aplicada permite adquirir los conocimientos necesarios para realizar levantamientos topográficos para futuras aplicaciones y proporciona la capacidad para resolver problemas que se presentan en el campo.
				  </p>
			</div>
		  </div>
		  <div class="item">
			<img src="images/pasalgebra.jpg" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>Curso de Algebra Lineal </h4>
				  <p>
				  No olvide que la clave del éxito en el estudio de las herramientas matemáticas radica en el entendimiento cabal de los conceptos fundamentales y la aplicación razonada enla resolución de problemas.
				  </p>
			</div>
		  </div>
		</div>
	<a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
</div>

<?php
if (isset($_GET['producto'])) 
{
  # code...
}












?>




<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">NO.</th>
      <th scope="col">Nombre</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Imagen</th>
      <th scope="col">Precio</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th><a href= "?producto= DON FLANCHO&Precio=Q.175">Comprar</a> </th>
      <td>DON FLANCHO</td>
      <td>Suave flan de caramelo sobre bizcocho veteado de vainilla y chocolate, bañado en más caramelo. En el centro, un casco de chocolate blanco relleno con dulce de leche.</td>
      <td> <img src="images/Don1.jpg" alt="#" class="img-thumbnail"></td>
      <td>14 a 16   Q.175</td>

    </tr>
    <tr>
      <th><a href= "?producto=FRESAS CON FRESAS&Precio=Q.159 / 199">Comprar</a></th>
      <td>FRESAS CON CREMA</td>
      <td>Tradicional bizcocho de vainilla humedecido con almíbar, relleno y cubierto con nuestra deliciosa combinación de fresas y crema, decorado con fresas frescas y almendras tostadas.</td>
      <td><img src="images/fresas2.jpg" alt="#" class="img-thumbnail"></td>
      <td>10 a 12 / 18 a 20 porciones  Q.159 / 199</td>
    </tr>
    <tr>
      <th><a href= "?producto= PASTEL DE ALMENDRA&Precio=Q.175">Comprar</a></th>
      <td>PASTEL DE ALMENDRA</td>
      <td>Bizcocho de vainilla relleno de nuestra receta especial de manjar, decorado con crujiente espumilla y almendras.</td>
      <td><img src="images/almendras3.jpg" alt="#" class="img-thumbnail"></td>
      <td>14 a 16   Q.175</td>
    </tr>
    <tr>
      <th><a href= "?producto= PIE DE LIMÓN&Precio=Q.60">Comprar</a></th>
      <td>PIE DE LIMÓN</td>
      <td>Crujiente base de galleta, con suave relleno de queso y limón.</td>
      <td><img src="images/limon4.jpg" alt="#" class="img-thumbnail"></td>
      <td>10 a 12 porcionesQ.60</td>
    </tr>
    <tr>
     <th><a href= "?producto= PIE QUESO Y ELOTE&Precio=Q.80">Comprar</a></th>
      <td>PIE QUESO Y ELOTE</td>
      <td>Nuestra receta exclusiva de tarta de queso mezclada con granos de elote y cubierta con una decoración de crema batida.</td>
      <td><img src="images/elote5.jpg" alt="#" class="img-thumbnail"></td>
      <td>10 a 12 porcionesQ.80</td>
    </tr>
  </tbody>
</table>
			




<hr class="soften"/>
<footer class="footer">
<div align="center">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">&copy; Copyright Ethan Rodriguez y Libni Hernadez</li>
  </ol>
</nav>
</div>

	</style>
  </body>
</html>