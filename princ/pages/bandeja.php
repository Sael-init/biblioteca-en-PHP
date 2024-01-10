<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <div class="row">
    <?php
    require_once "../conexion.php";

    $res = $con -> query("select * from respuesta");
    while($consu= $res -> fetch_object())
    {
       // $eliminar = "delete from respuesta where lib_res='".$consu->lib_res."' and ema_res ='".$consu->ema_res."'";
        //$eliminar1= "delete from consulta where lib_res='".$consu->lib_res."' and ema_res ='".$consu->ema_res."'";
        echo "<div class='col-md-6' >";
        echo "<table border='2' style='color: black; border-color:black>";
        echo "<tr>"."<td style='padding:2px'>DE:</td>".
                    "<td style='padding:2px'>".$consu->ven_res."</td>"."</tr>";
        echo "<tr>"."<td style='padding:2px'>PARA:</td>".
                    "<td style='padding:2px'>".$consu->ema_res."</td>"."</tr>";
        echo "<tr>"."<td style='padding:2px'>Mensaje</td>".
                    "<td style='padding:2px'>".$consu->inf_res."</td>"."</tr>";
        echo "<tr>"."<td style='padding:2px'>
        <a href='bandeja.php'>Aceptar</a>
        </td>"."<td style='padding:2px'>".$consu->inf_res."</td>"."</tr>";
        
        echo "</table>";
        echo "</div>";
    }
    ?>
    </div>
    </div>
</body>
</html>