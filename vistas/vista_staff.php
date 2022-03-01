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
                        <th scope="col">Staff ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Direccion ID</th>
                        <th scope="col">Pintura</th>
                        <th scope="col">Email</th>
                        <th scope="col">Tienda ID</th>
                        <th scope="col">Activa</th>
                        <th scope="col">Nombre de Usuario</th>
                        <th scope="col">Contraseña</th>
                        <th scope="col">Fecha de Actualizacion</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $query = "SELECT * FROM staff";
                    $resultado = mysqli_query($conexion, $query);
                    if ($resultado) {
                        while ($fila = mysqli_fetch_assoc($resultado)) {
                            echo "
<tr>
<td>${fila['staff_id']}</td>
<td>${fila['first_name']}</td>
<td>${fila['last_name']}</td>
<td>${fila['address_id']}</td>
<td>${fila['picture']}</td>
<td>${fila['email']}</td>
<td>${fila['store_id']}</td>
<td>${fila['active']}</td>
<td>${fila['username']}</td>
<td>${fila['password']}</td>
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