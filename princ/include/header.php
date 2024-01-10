
<?php
session_start();
if (empty($_SESSION['active'])) 
	{
		 header ('location: BRS/Index.php');
	
	}

?>
<header>
		<div class="header">
			
			<h1>BRS</h1>
			<div class="optionsBar">
				<p>Lima, <?php echo fechaC(); ?></p>
				<span>|</span>
				<span class="user"><?php echo $_SESSION['nombre'];?></span>
				<img class="photouser" src="../img/user.png" alt="Usuario">
				<a href="../princ/salir.php"><img class="close" src="../img/salir.png" alt="Salir del sistema" title="Salir"></a>
			</div>
		</div>
	</header>