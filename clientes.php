<?php
require_once "recursos/conexion.php";
require_once "recursos/funciones.php";
$pagina = "Clientes";
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
    throw new Exception("wey, klk");
} catch (Throwable $ex) {
    $error = $ex->getMessage();
}
#incluir vista

require_once "vistas/vista_clientes.php";

#no debe haber codigo despues de esta linea