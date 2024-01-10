<!DOCTYPE html> 
<html lang="es">
   
    <meta charset="UTF-8">
    <title>BRS</title>
    <link rel="shortcut icon" type="imagen/icon" href="../../imagen/libro.png">
    <meta name= "viewport" width= "device-width"  initial-scale="1">
    
    <!-- Latest compiled and minified CSS -->
<head>
    <meta charset="UTF-8">
    <title>MyWeb</title>
    <link rel="shortcut icon" type="imagen/png" href="../imagen/logo.png">
    <link rel="stylesheet" href="../estilo/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../estilo/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../estilo/index.css">
    <link rel="stylesheet" href="../estilo/fondo.css">
    <link rel="stylesheet" href="../estilo/Titulo.css" class="">
    <link rel="stylesheet" href="../pages/Quienes%20somos.html">
    <link rel="stylesheet" href="../Inicio.html">
    <link rel="stylesheet" href="../estilo/footer.css" class="">
    <link rel="stylesheet" href="../estilo/boton.css">
	<?php include "include/scripts.php";?>

</head>
<body>
	
	<?php include "include/header.php";?>
   <!-- Inicio navbar -->
	
    <nav class="navbar navbar-inverse narvbar-static-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        <a class="navbar-brand" href="#"> <img src="../imagen/libro.png" alt="" width="30px" height="30px"> </a>
      <a class="navbar-brand" href="Index.php">   Biblioteca de Roberto y Salvador</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="pages/Anime.php"> Lista de Libros </a></li>
        <li><a href="pages/Solicitar.php"> Solicitar</a></li>
		  <li><a href="pages/bandeja.php"> Respuestas </a></li>
   
          
      </ul>
    </div><!-- /.navbar-collapse :v -->
  </div><!-- /.container-fluid -->
 
</nav>
    <!-- fin navbar -->
    
	
	
  <div class="contenedor">
	<div class="jumbotron">
  	<h1>Bienvenido al BRS</h1>
  		<div class="carpeta">
 		 <p>
        Encuentra el libro que tanto anhelas
 		</p> 
		<p>
        <cite>Empieza tu busqueda </cite>
        
		</p>
			<center> 
		<em class="glyphicon glyphicon-hand-down" aria-hidden="true"></em> <br>
        <br>
        <a class="btn btn-primary btn-lg" href="./pages/Anime.php" role="button">Buscar libro</a></div>  
 		 <br>
		</center>	
	</div>
   <!-- fin jumbotron -->
	  
<div id="carousel1" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel1" data-slide-to="0" class="active"></li>
          <li data-target="#carousel1" data-slide-to="1"></li>
          <li data-target="#carousel1" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="item active"><img src="../imagen/img1.jpg" alt="First slide image" class="center-block">
            <div class="carousel-caption">
  
            </div>
          </div>
          <div class="item"><img src="../imagen/img2.jpg" alt="Second slide image" class="center-block">
            <div class="carousel-caption">
       
            </div>
          </div>
          
			<div class="item"><img src="../imagen/img5.jpg" alt="Third slide image" class="center-block">
            <div class="carousel-caption">
     
            </div>
          </div>
			<div class="item"><img src="../imagen/img4.jpg" alt="Third slide image" class="center-block">
            <div class="carousel-caption">
            
            </div>
          </div>
			
        </div>
        <a class="left carousel-control" href="#carousel1" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#carousel1" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">Next</span></a></div>
	  
<!-- busqueda fin -->
	  </div>
<section class="portafolio-container">
   <!-- fin -->
  <!-- <script src="js/jquery.min.js"></script> -->
  <script src="../js/jquery-1.11.3.min.js"></script>
  <script src="../estilo/bootstrap/js/bootstrap.min.js"></script>
</section>
   <br>
   <br>
   <i class="footer">
   <cite>Que miras rana <i class="glyphicon glyphicon-heart"></i>  </cite>
   </i>
  
</body>
</html>