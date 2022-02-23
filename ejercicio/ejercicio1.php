<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hipotenusa</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <div class="container w-25">
        <br>
        <form action="" method="get">
            <h5>Buscar la hipotenusa</h5>
            <div class="mb-3">
                <label for="">Base</label>
                <input type="text" name="base" class="form-control">
            </div>
            <div class="mb-3">
                <label for="">Altura</label>
                <input type="text" name="altura" class="form-control">
            </div>
            <button class="btn btn-danger">Calcular</button>
        </form>
        <?php print_r($_GET);

        //$Base = $_GET['base' * 2];
        //$Altura = $_GET['altura' * 2];
        //$resultado = $Base * $Altura;
        //echo "$resultado";
        $base = $_GET["base"];
        $altura = $_GET["altura"];
        $numero_base = pow($base, 2);
        $numero_altura = pow($altura, 2);
        $resultado = $numero_base + $numero_altura;

        echo  "El resultado es:" . round(sqrt($resultado));
        ?>
    </div>


</body>

</html>