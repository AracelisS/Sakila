<?php
require_once "recursos/conexion.php";
require_once "recursos/funciones.php";
$pagina = "Peliculas";
$error = "";


try {
    #borrar despues
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    //verificar si le da click al boton
    if (isset($_POST['boton-guardar'])) {
        echo "guardando...";
        // variable

        // validaciones

        //guardar

        //refrezcar
    }
} catch (Throwable $ex) {
    $error = $ex->getMessage();
}
#incluir vista

require_once "vistas/vista_peliculas.php";

#no debe haber codigo despues de esta linea