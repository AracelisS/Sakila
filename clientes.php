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
        $name = $_POST["name"];
        $apellido = $_POST["last_name"];
        $email = $_POST["email"];
        $create_date = $_POST["create_date"];
        // validaciones
        if (empty($name)) {
            throw new Exception("El nombre no puede estar vacio");
        }
        if (empty($apellido)) {
            throw new Exception("El Apellido no puede estar vacio");
        }
        if (empty($email)) {
            throw new Exception("El Correo no puede estar vacio");
        }
        if (empty($create_date)) {
            throw new Exception("La fecha no puede estar vacia");
        }

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