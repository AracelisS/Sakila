<?php
$hostname = "localhost";
$username = "root";
$passw = "";
$database = "sakila";




$conexion = mysqli_connect($hostname, $username, $passw, $database)
    or die("no se puede conectar" . mysqli_connect_error());