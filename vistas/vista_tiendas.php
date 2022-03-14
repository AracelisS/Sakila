<?php



require_once "parte_head.php";
?>

<body>


    <?php
    require_once "parte_menu.php";
    ?>
    <div class="container ">
        <h3><?php echo $pagina; ?></h3>

        <label for="">manager</label>
        <select class="form-select" name="manager_staff_id">
            <option value="" selected>seleccione</option>



            <?php
            $query = "SELECT * FROM store";

            $resultado = mysqli_query($conexion, $query);
            if ($resultado) {
                while ($fila = mysqli_fetch_object($resultado)) {
                    echo "<option value='$fila->address_id'>$fila->manager_staff_id</option>";
                }
            }
            ?>
        </select> <label for="">direcion</label>
        <select class="form-select" name="address_id">
            <option value="" selected>seleccione</option>

            <?php
            $query = "SELECT * FROM store";

            $resultado = mysqli_query($conexion, $query);
            if ($resultado) {
                while ($fila = mysqli_fetch_object($resultado)) {
                    echo "<option value='$fila->address_id'>$fila->manager_staff_id</option>";
                }
            }
            ?>
        </select>

        <div class="mb-3">
            <button name="boton-guardar" class="btn btn-primary">guardar</button>

        </div>
        </form>

        <?php if (!empty($error)) : ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <?php echo $error; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php endif; ?>
    </div>
    </div>


    <div class="row">
        <div class="col-4">
            <form class="input-group mb-3">
                <input type="text" name="store1" class="form-control" placeholder="Buscador">

                <button class="btn btn-outline-secondary" type="submit" name="boton_buscar" id="boton-buscar"><i
                        class="bi bi-search"></i>Buscar</button>

            </form>




        </div>


    </div>
    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID Tienda</th>
                    <th scope="col">Personal de Administracion ID</th>
                    <th scope="col">Direccion ID</th>
                    <th scope="col">Fecha de Actualizacion</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $query = "SELECT * FROM store";
                $buscador = $_GET['buscador'] ?? "";
                if ($buscador != "") {
                    $query = "SELECT * FROM store WHERE manager_staff_id='$buscador'";
                }
                $resultado = mysqli_query($conexion, $query);
                if ($resultado) {
                    while ($fila = mysqli_fetch_assoc($resultado)) {
                        echo "
<tr>
<td>${fila['store_id']}</td>
<td>${fila['manager_staff_id']}</td>
<td>${fila['address_id']}</td>
<td>${fila['last_update']}</td>
</tr>
";
                    }
                }

                ?>


            </tbody>
        </table>
    </div>
    </div>
    <?php
    require_once "parte_footer.php"
    ?>
</body>

</html>