<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container w-25">
        <br>
        <h5>Calcular hipotenusa de un triangulo</h5>
        <form action="" method="get">
            <div class="mb-3">
                <label for="">Cateto 1</label>
                <input type="number" name="cateto1" class="form-control">
            </div>
            <div class="mb-3">
                <label for="">Cateto 2</label>
                <input type="number" name="cateto2" class="form-control">
            </div>
            <button class="btn btn-danger">Calcular</button>
        </form>
        <?php
        print_r($_GET);
        $cateto1 = $_GET["cateto1"];
        $cateto2 = $_GET["cateto2"];
        $numero_cateto1 = pow($cateto1, 2);
        $numero_cateto2 = pow($cateto2, 2);
        $resultado = $numero_cateto1 + $numero_cateto2;

        echo  "El resultado es: " . round(sqrt($resultado));
        ?>
        ?>
    </div>
</body>

</html>