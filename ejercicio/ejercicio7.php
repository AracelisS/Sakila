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
        <form action="" method="get">

            <br>
            <h5>Cual dia de la semana es</h5>
            <!-- <div class="wb-3">
                <ol>
                    <li>Lunes</li>
                    <li>Martes</li>
                    <li>Miercoles</li>
                    <li>Jueves</li>
                    <li>Viernes</li>
                    <li>Dabado</li>
                    <li>Domingo</li>
                </ol>
            </div>
            -->
            <div class="wb-3">
                <label for="">Digita numero</label>
                <input type="number" name="numero" class="form-control">
            </div>
            <br>
            <button class="btn btn-danger">Enviar</button>
        </form>
        <br>
        <?php
        print_r($_GET);
        $numero = $_GET["numero"];
        if ($numero == 1) {
            echo "Hoy es Lunes";
        } elseif ($numero == 2) {
            echo "Hoy es Martes";
        } elseif ($numero == 3) {
            echo "Hoy es Miercoles";
        } elseif ($numero == 4) {
            echo "Hoy es Jueves";
        } elseif ($numero == 5) {
            echo "Hoy es Viernes";
        } elseif ($numero == 6) {
            echo "Hoy es Sabado";
        } elseif ($numero == 7) {
            echo "Hoy es Domingo";
        } else {
            echo "Valor no valido";
        }
        ?>
    </div>
</body>

</html>