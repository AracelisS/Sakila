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
                        <th scope="col">ID Pelicula</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripsion</th>
                        <th scope="col">Año de Lanzamiento</th>
                        <th scope="col">Idioma ID</th>
                        <th scope="col">Idioma original ID</th>
                        <th scope="col">Duracion de alquiler</th>
                        <th scope="col">Tasa de arredamiento</th>
                        <th scope="col">Longitud</th>
                        <th scope="col">Costo de remplazo </th>
                        <th scope="col">Tasa de arredamiento</th>
                        <th scope="col">Clasificacion</th>
                        <th scope="col">Facturas Especiales</th>
                        <th scope="col">Fecha de Actualizacion</th>


                    </tr>
                </thead>
                <tbody>
                    <?php

                    $query = "SELECT * FROM film";
                    $resultado = mysqli_query($conexion, $query);
                    if ($resultado) {
                        while ($fila = mysqli_fetch_assoc($resultado)) {
                            echo "
<tr>
<td>${fila['film_id']}</td>
<td>${fila['title']}</td>
<td>${fila['description']}</td>
<td>${fila['release_year']}</td>
<td>${fila['language_id']}</td>
<td>${fila['original_language_id']}</td>
<td>${fila['rental_duration']}</td>
<td>${fila['rental_rate']}</td>
<td>${fila['length']}</td>
<td>${fila['replacement_cost']}</td>
<td>${fila['rating']}</td>
<td>${fila['special_features']}</td>
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