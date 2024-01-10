<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>
    <H2>Llenar los siguientes campos para solicitar el libro</H2>
    <form method = "GET"> 
    <input type="text" name="use" placeholder="Usuario" required>
    <input type="text" name="ema" placeholder="Email" required>
    <input type="text" name="nom" placeholder="Nombre" required>
    <input type="text" name="lib" placeholder="Nombre del Libro" required>
    <input type="submit" >
    </form>
    </center>
    <?php 
    require_once "../conexion.php";

    if($_GET){
        $solicitar = "insert into consulta values('".$_GET['use']."','".$_GET['ema']."','".$_GET['nom']."','".$_GET['lib']."') ";
        $con -> query($solicitar);    
        echo "Solicitud enviada";
    }
    ?>
</body>
</html>