<?php
$host='localhost';
$user='root';
$password='';
$db='brs';
$con=@mysqli_connect($host,$user,$password,$db);
if(!$con){

	echo "error en la conexion";

}else{

	echo "conexion exitosa";
}



?>