<?php

$alert='';
session_start();
	if (!empty($_SESSION['active'])) 
	{
		header ('location: princ/');


	}else{

         if (!empty($_POST)){

	 if(empty($_POST['usuario']) || empty($_POST['clave']))
	{
    $alert='Ingrese sus usuario y su clave';

	}else{

		require_once "conexion.php";

		$user=mysqli_real_escape_string($con,$_POST['usuario']);
		//$pass =md5(mysqli_real_escape_string($conection,$_POST['clave']));
			$pass =mysqli_real_escape_string($con,$_POST['clave']);
        //  echo $pass;exit;
            //se requiere de dos parametros
		$query=mysqli_query($con,"SELECT * FROM usuario WHERE usuario='$user' AND clave ='$pass'");

		$result=mysqli_num_rows($query);

		if($result>0)
		{
			while ($admin = $query-> fetch_object())
			{
				if($admin -> rol == 1 ){
					header ('location: sistema/');
					exit();
				}elseif ($admin -> rol == 2){
					header ('location: Vendedores/');
					exit();
				}
			}

			$data=mysqli_fetch_array($query);
			//print_r($data);
			$_SESSION['active']= true;
            $_SESSION['iduser']= $data['idusuario'];
            $_SESSION['nombre']= $data['nombre'];
            $_SESSION['email']= $data['correo'];
            $_SESSION['user']= $data['usuario'];
            $_SESSION['rol']= $data['rol'];
            header ('location: princ/');

            }else{

            	$alert='el usuario o la clave incorrecto';
            	session_destroy();
            }
	}

//echo $alert="HA DADO CLICK EN INGRESAR";


	}
}

?>



<!DOCTYPE html>

<html>
<head>
	<title>Sistema de facturacion</title>
	<link rel="stylesheet" href="css/loginnew.css">
    <link rel="stylesheet" href="css/fondo_login.css">
</head>
<body>
<section id ="container">
		<form action="" method="post">
		
			
   <div class="login">
   <div class="loginBox">
   <img src="imagen/login.jpg" class="user">
   <h2>Loguéate!</h2>
   <form>
       <p>Usuario</p>
       <input type="text" name="usuario" placeholder="Usuario">
       <p>Contraseña</p>
       <input type="password" name="clave" placeholder="**********">
				<?php echo isset($alert) ? $alert : '';?> 
       <input type="submit" value="Ingresa">
			
		</div>
   </form>
   </div>
 </div>
			
		</form>
</section>


</body>
</html>