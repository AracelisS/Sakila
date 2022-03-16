<?php
require_once "recursos/conexion.php";
require_once "recursos/funciones.php";
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
        $query = "INSERT INTO category (name) VALUES ('$name')";

        echo $query;
        $resultado = $conexion->query($query) or die("Error en query");

        if ($resultado) {
            $_SESSION["maensaje"] = "Datos insertados correctamente";
            $script_alerta = alerta("Insertado", "correctamente", "success");
        } else {
            $script_alerta = alerta("Error", "No se puede insertar", "error");
            throw new Exception("No se pudo insertar los datos");
        }

        //refrezcar
        //refrezcar("categorias.php");
    }
} catch (Throwable $ex) {
    $error = $ex->getMessage();
}
#incluir vista

require_once "vistas/vista_categoria.php";

#no debe haber codigo despues de esta linea