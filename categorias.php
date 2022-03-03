<?php
$pagina = "Categorias";
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
        // validaciones
        if (empty($name)) {
            throw new Exception("El nombre no puede estar vacio");
        }
        //guardar

        //refrezcar
    }
    throw new Exception("wey, klk");
} catch (Throwable $ex) {
    $error = $ex->getMessage();
}
#incluir vista

require_once "vistas/vista_categoria.php";

#no debe haber codigo despues de esta linea