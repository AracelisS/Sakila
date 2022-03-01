<?php



require_once "parte_head.php";
?>

<body>


    <?php
    require_once "parte_menu.php";
    ?>
    <div class="container ">
        <h3><?php echo $pagina; ?></h3>

        <div class="row">
            <div class="col-6">
                aqui va el formulario
            </div>
            <br>
        </div>

        <div class="row">
            <div class="col-4 ">
                <form class="input-group mb-3">
                    <input type="text" name="buscador" class="form-control" placeholder="Buscador">
                    <button class="btn btn-outline-secondary" type="submit" name="boton_buscar" id="boton-buscar"><i
                            class="bi bi-search"></i>Buscar</button>
                </form>
            </div>
        </div>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID Ciudad</th>
                        <th scope="col">Nombre Ciudad</th>
                        <th scope="col">ID Pais</th>
                        <th scope="col">Fecha de Actualizacion</th>

                    </tr>
                </thead>
                <tbody>
                    <?php

                    $query = "SELECT * FROM city";
                    $resultado = mysqli_query($conexion, $query);
                    if ($resultado) {
                        while ($fila = mysqli_fetch_assoc($resultado)) {
                            echo "
        <tr>
            <td>${fila['city_id']}</td>
            <td>${fila['city']}</td>
            <td>${fila['country_id']}</td>
            <td>${fila['last_update']}</td>
        </tr>
        ";
                        }
                    }

                    ?>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
    <?php
    require_once "parte_footer.php"
    ?>
</body>

</html>