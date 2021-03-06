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
                <form class="col-6" method="post">
                    <div class="mb-3">
                        <label for="">Ciudad</label>
                        <input type="text" name="city" class="form-control">
                    </div>
                    <div class="mb-3">


                        <label for="">Paises</label>
                        <select class="form-select" aria-label="Default select example" name="country_id">

                            <option value="" selected>Selecciona</option>
                            <?php
                            $query = "SELECT * FROM country";
                            $resultado = mysqli_query($conexion, $query);
                            if ($resultado) {
                                while ($fila = mysqli_fetch_object($resultado)) {
                                    echo "<option value='$fila->country_id'>$fila->country</oction>";
                                }
                            }
                            ?>
                        </select>
                        <br>
                        <button name="boton-guardar" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
                <br>
                <?php if (!empty($error)) : ?>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
                    crossorigin="anonymous">
                </script>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <?php
                        echo  $error;
                        ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php endif; ?>
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
                    $buscador = $_GET['buscador'] ?? "";
                    if ($buscador != "") {
                        $query = "SELECT * FROM city WHERE city='$buscador'";
                    }

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

                </tbody>
            </table>
        </div>
    </div>
    <?php
    require_once "parte_footer.php"
    ?>
</body>

</html>