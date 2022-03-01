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
        <h5>Numero par o impar</h5>
        <form action="" method="get">
            <label for="">Digita el numero</label>
            <input type="number" name="numero" class="form-control">
            <br>
            <button class="btn btn-danger">Verificar</button>
        </form>
        <?php
        print_r($_GET);
        //Variable donde almacenamos el número que comprobaremos
        $num = $_GET["numero"];
        //Comprobamos si num es un número par o no
        if (($num % 2) == 0) {
            //Es un número par
            echo 'Es un número par';
        } else {
            //Es un número impar
            echo 'Es un número impar';
        }
        ?>

    </div>
</body>

</html>