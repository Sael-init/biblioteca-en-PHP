<!DOCTYPE html> 
<html lang="es">
   
    <meta charset="UTF-8">
    <title>Biblioteca de Roberto y Salvador</title>
    <link rel="shortcut icon" type="../imagen/icon" href="../../imagen/libro.png">
    
    
    
    <!-- Latest compiled and minified CSS -->
<head>
    <meta charset="UTF-8">
    <title>MyWeb</title>
    <link rel="shortcut icon" type="imagen/png" href="./imagen/logo.png">
    <link rel="stylesheet" href="../../estilo/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../estilo/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../../estilo/Titulo.css" class="">
    <link rel="stylesheet" href="../../estilo/fondo%20contactanos.css">
    <link rel="stylesheet" href="../../estilo/footer.css">
    <link rel="stylesheet" href="../../estilo/contactanos.css">
    <link rel="stylesheet" href="../../estilo/ionicons-2.0.1/css/ionicons.css" class="">

</head>
<body>
<?php 
	//error_reporting(0);
	$con = new mysqli('localhost','root','','brs');
	if ($con->connect_errno) {
    echo("Error de conexion: ". $objc->connect_error);
    exit();
	}
	$con -> query("set names 'utf8'");
	?>

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
        <a class="navbar-brand" href="#"><img src="../../imagen/libro.png" width="30px" height="30px"></a>
      <a class="navbar-brand" href="../Index.php"> Biblioteca de Roberto y Salvador</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="Anime.php"> Lista de Libros </a>
       <li><a href="../pages/contactanos.php"> Agregar Libro</a></li>
        <li><a href="../pages/Quienes%20somos.php"> ¿Quienes somos? </a></li>
      </ul>
    </div><!-- /.navbar-collapse :v -->
  </div><!-- /.container-fluid -->
 
</nav>
    <!-- fin -->
    <form method ="post">
 <h2>AGREGAR LIBRO <i class="ion-happy-outline"></i> </h2>
 <input type="text" name="cod" placeholder="Codigo" required>
  <input type="text" name="nom" placeholder="Nombre" required>
  <input type="text" name="aut" placeholder="Autor" required>
  <input type="text" name="ano" placeholder="Año" required>
  <input type="text" name="gen" placeholder="Género" required>
  <input type="text" name="sip" placeholder="Sinopsis" required>
  <input type="text" name="edi" placeholder="Editorial" required>
  <input type="text" name="des" placeholder="Descripción física" required>
  <input type="text" name="fot" placeholder="Foto" required>
  <input type="submit" >
  
   
   <?php 
   if($_POST)
   { 
    $insertar = "insert into libros values('".$_POST['cod']."','".$_POST['nom']."','".$_POST['aut']."','".$_POST['ano']."','".$_POST['gen']."','".$_POST['sip']."',
    '".$_POST['edi']."','".$_POST['des']."','".$_POST['fot']."')";

    $con->query($insertar);
  }

   ?>
   
   </form>
   
   
    <!-- hola -->
   <script src="../../js/jquery.min.js"></script>
    <script src="../../estilo/bootstrap/js/bootstrap.min.js"></script>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
   <br>
   <br>
   <i class="footer">
   <cite>Proyecto creado con cariño <i class="glyphicon glyphicon-heart"></i>  </cite>
   </i>
</body>
</html>