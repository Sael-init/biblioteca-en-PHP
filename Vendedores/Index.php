<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <H1>Solicitudes pendientes</H1>
    <table width='50%' border='1' bordercolor='#EFF2FB' cellspacing='0' cellpadding='6'>
	<tr bgcolor='#EFF8FB'>
	<th width='10%'>Usuario</th>
	<th>Email</th>
	<th>Nombre y Apellido</th>	
	<th width='20%'>Nombre del libro</th>
    <th width='5%'>Responder</th>
	</tr>


    <?php
    require_once "../conexion.php";  
    $soli ="select * from consulta";
    $mos = $con -> query($soli);

    while($res= $mos -> fetch_object())
    {
        echo "<tr>";
        echo "<td>".$res-> usuario."</td>".
        "<td>".$res-> email."</td>".
        "<td>".$res-> nombre ."</td>".
        "<td>".$res-> nom_libro ."</td>".
        "<td><a href='responder.php/? v1=$res->email & v2=$res->nom_libro'º>responder</td>";
        echo "</tr>";

    }
    
    ?>
</body>
</html>