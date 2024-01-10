<!DOCTYPE html> 
<html lang="es">
   
    <meta charset="UTF-8">
    <title>Biblioteca de Roberto y Salvador</title>
    <link rel="shortcut icon" type="imagen/icon" href="../../imagen/libro.png">
    
    
    <!-- Latest compiled and minified CSS -->
<head>
    <meta charset="UTF-8">
    <title>MyWeb</title>
    <link rel="shortcut icon" type="imagen/png" href="../../imagen/libro.png">
    <link rel="stylesheet" href="../../estilo/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../estilo/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../../estilo/Titulo.css" class="">
    <link rel="stylesheet" href="../../estilo/Anime.css">
    <link rel="stylesheet" href="../../estilo/Fondo%20anime.css">
    <link rel="stylesheet" href="../../estilo/">


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
        <li><a href="../pages/Anime.php"> Lista de Libros </a>
	    <li><a href="../pages/contactanos.php"> Agregar Libro</a></li>
        <li><a href="../pages/Quienes%20somos.php"> ¿Quienes somos? </a></li>
    
      </ul>
    </div><!-- /.navbar-collapse :v -->
  </div><!-- /.container-fluid -->
 
</nav>
    <!-- fin -->
    
    <!-- fin busqueda -->
    <div class="jumbotron">
  <h1>Lista de Libros</h1>
  <div class="carpeta">
  <br>
  <p>
      Aquí encuentra el libro que tanto te interesa!

 </p>
  
</div>
   </div>
       <div class="container" style="margin-top: 5%">
    <div class="col-md-6 col-md-offset-3 col-lg-7 col-lg-offset-2">

        <!-- Search Form -->
       
        <div class="container">
	<div class="row">
           <div id="custom-search-input">
                            <div class="input-group col-md-12" align="center">
								<form method="post">  
									
									
										 <section   class="webdesigntuts-workshop">
											
                                <input type="text" class="search-query form-control" name="txtnom" placeholder="Nombre del Libro" />
						
                               <input type="submit" align="left" style="background-color: #C27800; position: absolute; border: none;color: white;padding: 5px 20px;text-align: center;font-size: 16px; margin-left: 50px">

										</section>
									
								</form>	
									
                            </div>
                        </div>
	</div>
</div>
      </div>
				
	
      
       
        <!-- End of Search Form -->
            
    </div>
</div>
		   
   
    <!-- Inicio animes -->
<br><br><br><br>
	
	   <div class = 'container'> 
		   <div class="row">

                    <?php 
		  
			  if($_POST)
			  {
				$cos= "select * from libros where nombre like '%".$_POST['txtnom']."%' Order by codigo";
				 $consu = $con-> query($cos);
				  while($reg= $consu -> fetch_object()){   
				
				echo "<div class='col-md-6' >";
					  
				echo "<table border='2' style='color: black; border-color:black ; border: 0; width:600px; margin-left:100px; 
				background:#393939; margin-top: 50px; font-family: helvetiva,Verdana,Monaco,sans-serif' >";
					  
			  	echo "<tr>"."<td Rowspan='16' ><a href='https://es.wikipedia.org/wiki/$reg->nombre' target='_blank'><img src= fotos/".$reg->foto.".jpg style='width:160px; height:210px; padding: 15px; background:#393939'></a></td>".
					
					 "<td style='padding:2px; background:#E2E2E2; font-weight: bold' > ID </td>".
					"<td style='padding:2px; background:#F7F7F7'>".$reg->codigo."</td>"."</tr> ";
				
				echo "<tr>"."<td style='padding:2px; background:#E2E2E2; font-weight: bold' >Nombre</td>".
					 "<td style='padding:2px; background:#F7F7F7'>".$reg->nombre."</td>"."</tr>";
	
				echo "<tr>"."<td style='padding:2px; background:#E2E2E2; font-weight: bold'>Autor</td>".
					 "<td style='padding:2px; background:#F7F7F7'>".$reg->autor.
					 "</td>"."</tr>";
	
				echo "<tr>"."<td style='padding:2px; background:#E2E2E2; font-weight: bold'>Año</td>".
					 "<td style='padding:2px; background:#F7F7F7'>".$reg->año.
					 "</td>"."</tr>";
					  
				echo "<tr>"."<td style='padding:2px; background:#E2E2E2; font-weight: bold'>Género</td>".
					 "<td style='padding:2px; background:#F7F7F7'>".$reg->genero.
					 "</td>"."</tr>";
					  
				echo "<tr>"."<td style='padding:2px; background:#E2E2E2; font-weight: bold'>Sipnopsis</td>".
					 "<td style='padding:2px; background:#F7F7F7'>".$reg->sipnopsis.
					 "</td>"."</tr>";
					  
				echo "<tr>"."<td style='padding:2px; background:#E2E2E2; font-weight: bold'>Editorial</td>".
					 "<td style='padding:2px; background:#F7F7F7'>".$reg->editorial.
					 "</td>"."</tr>";
					  
				echo "<tr>"."<td style='padding:2px; background:#E2E2E2; font-weight: bold'>Descripción</td>".
					 "<td style='padding:2px; background:#F7F7F7'>".$reg->descripcion.
					 "</td>"."</tr>";
					  
					  echo "</table>";
					  
				echo "</div>";
					  
		  		}
		  }	
		  
	 ?>            
    
   </div>	
		      </div>
   <!-- Fin animes -->
    
    <!-- hola -->
   <script src="../../js/jquery.min.js"></script>
    <script src="../../estilo/bootstrap/js/bootstrap.min.js"></script><br>
    <br>
    <em class="footer"> <cite>Proyecto creado para tu tío <em class="glyphicon glyphicon-heart"></em></cite> </em>
</body>
</html>