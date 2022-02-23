<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Distancia</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container w-25">
        <br>
        <h5>Calcular la Distancia</h5>
        <form action="" method="get">
            <div class="mb-3">
                <label for="">Velocidad</label>
                <input type="text" name="velocidad" class="form-control">
            </div>
            <div class="mb-3">
                <label for="">Tiempo</label>
                <input type="text" name="tiempo" class="form-control">
            </div>
            <button class="btn btn-danger">Calcular</button>
        </form>
        <br>
        <?php
        print_r($_GET);
        $tiempo = $_GET["tiempo"];
        $velocidad = $_GET["velocidad"];
        echo "La distancia es: " . ($tiempo * $velocidad);
        ?>
    </div>
</body>

</html>