<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <div>

        <form action="" class="container w-25">

            <div>
                <br>
                <h5>Idiomas</h5>

                <label for="nombre">Nombre</label>
                <input type="text" name="idioma" id="nombre" class="form-control mb-4">
                <input type="submit" class="btn btn-danger" value="Guardar" name="guardar">
            </div>
        </form>
        <hr class="container w-25">
        <div class="container w-25">
            <h5>Listado de idiomas</h5>
            <table class="table table-bordered border-primary">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                    </tr>

                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <th></th>

                    </tr>
                    <tr>
                        <td>2</td>
                        <th></th>
                    </tr>
                    <tr>

                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <?php
    $servername = "localhost";
    $database = "sakila";
    $username = "root";
    $password = "";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";

    $idioma = $_GET["idioma"];
    $insertar = $_GET["guardar"];
    $sql = "INSERT INTO language (name) VALUES ('$idioma')";
    if ($conn->query($sql) === TRUE) {
        echo "El nuevo idioma esta insertado";
    }

    if ($idioma == false) {
        echo "El sql dio error";
    }
    mysqli_close($conn);


    ?>

</body>

</html>