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
                        <th scope="col">ID Cliente</th>
                        <th scope="col">Historial ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Email</th>
                        <th scope="col">Direccion ID</th>
                        <th scope="col">Activa</th>
                        <th scope="col">Fecha de creacion</th>
                        <th scope="col">Fecha de Actualizacion</th>
                    </tr>

                </thead>
                <tbody>
                    <?php

                    $query = "SELECT * FROM customer";
                    $resultado = mysqli_query($conexion, $query);
                    if ($resultado) {
                        while ($fila = mysqli_fetch_assoc($resultado)) {
                            echo "
        <tr>
            <td>${fila['customer_id']}</td>
            <td>${fila['store_id']}</td>
            <td>${fila['first_name']}</td>
            <td>${fila['last_name']}</td>
            <td>${fila['email']}</td>
            <td>${fila['address_id']}</td>
            <td>${fila['active']}</td>
            <td>${fila['create_date']}</td>
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
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
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