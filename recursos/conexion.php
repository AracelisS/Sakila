<?php
$hostname = "localhost";
$username = "root";
$passw = "";
$database = "sakila";


//conexion para 000webhost
//b{cfmgmk%>&LL/N3
if ($_SERVER['HTTP_HOST'] == 'xtudioplay.000webhostapp.com') {
    $username = "id18480513_root";
    $passw = "b{cfmgmk%>&LL/N3";
    $database = "id18480513_sakila";
}



$conexion = mysqli_connect($hostname, $username, $passw, $database)
    or die("no se puede conectar" . mysqli_connect_error());