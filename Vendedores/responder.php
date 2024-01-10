<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border="1" style="margin-top:90px;">
<tr >  
	<td colspan="2" style="text-align: center;"> Responder </td>  
</tr>

<form method = "POST">
<tr>
<td>Email: </td>
<td> <input type="text" value="<?php echo  $_GET['v1']?>" name="ema"> </td></tr>

<tr>
<td>Libro: </td>
<td> <input type="text" value="<?php echo  $_GET['v2']?>" name="lib"> </td></tr>

<tr> 
<td>Respuesta: </td>
<td>
    <input type="text"style="WIDTH: 228px; HEIGHT: 98px" size=40 name="res"></td></tr> 
    <tr><td>Email Vendedor: </td> <td><input type="text" name="emv"></td></tr>
    <tr> <td colspan="2"><center><input type="submit"></center></td></tr> 

    <?php 
    if($_POST)
    {
        require_once "../conexion.php";
        $datos = "Insert into respuesta values ('".$_POST['ema']."','".$_POST['lib']."','".$_POST['res']."','".$_POST['emv']."')";
        $con -> query($datos);
    }
    ?>
</form>

</table> 
</body>
</html>