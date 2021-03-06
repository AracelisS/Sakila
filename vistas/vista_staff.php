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
                        <label for="">Nombre</label>
                        <input type="text" name="first_name" class="form-control">
                        <label for="">Apellido</label>
                        <input type="text" name="last_name" class="form-control">
                        <br>
                        <label for="">Direccion</label>
                        <br>
                        <select name="address_id" id="">
                            <option value="">Selecciona</option>
                            <?php
                            $query = "SELECT * FROM staff";
                            $resultado = mysqli_query($conexion, $query);
                            if ($resultado) {
                                while ($fila = mysqli_fetch_object($resultado)) {
                                    echo "<option value='$fila->first_name'>$fila->staff</oction>";
                                }
                            }

                            ?>
                        </select>
                        <br><br>
                        <label for="">Correo</label>
                        <input type="text" name="email" class="form-control">
                        <br>
                        <label for="">Tienda</label>
                        <br>
                        <select name="store_id" id="">
                            <option value="">Seleciona</option>
                            <option value="">kahlahlhal</option>
                            <?php
                            $query = "SELECT * FROM store";
                            $resultado = mysqli_query($conexion, $query);
                            if ($resultado) {
                                while ($fila = mysqli_fetch_object($resultado)) {
                                    echo "<option value='$fila->manager_staff_id'>$fila->store</oction>";
                                }
                            }

                            ?>
                        </select>
                        <br><br>
                        <label for="">Usuario</label>
                        <input type="text" name="username" class="form-control">
                        <label for="">Contrase??a</label>
                        <input type="text" name="password" class="form-control">
                    </div>
                    <div class="mb-3">
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
                        <th scope="col">Contrase??a</th>
                        <th scope="col">Fecha de Actualizacion</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $query = "SELECT * FROM staff";
                    $buscador = $_GET['buscador'] ?? "";
                    if ($buscador != "") {
                        $query = "SELECT * FROM staff WHERE first_name='$buscador'";
                    }
                    $resultado = mysqli_query($conexion, $query);
                    if ($resultado) {

                        while ($fila = mysqli_fetch_assoc($resultado)) {

                            $imagen = '<img src="data:image/jpeg;base64,' . base64_encode($fila['picture']) . '"/>';
                            echo "
<tr>
<td>${fila['staff_id']}</td>
<td>${fila['first_name']}</td>
<td>${fila['last_name']}</td>
<td>${fila['address_id']}</td>
<td>${imagen}</td>
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


                </tbody>
            </table>
        </div>
    </div>
    <?php
    require_once "parte_footer.php"
    ?>
</body>

</html>