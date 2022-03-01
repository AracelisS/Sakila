<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes del año</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container w-25">
        <br>
        <form action="" method="get">
            <h5>Cual mes del año es</h5>

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
            echo "Estamos en Enero";
        } elseif ($numero == 2) {
            echo "Estamos en Febrero";
        } elseif ($numero == 3) {
            echo "Estamos en Marzo";
        } elseif ($numero == 4) {
            echo "Estamos en Abril";
        } elseif ($numero == 5) {
            echo "Estamos en Mayo";
        } elseif ($numero == 6) {
            echo "Estamos en Junio";
        } elseif ($numero == 7) {
            echo "Estamos en Julio";
        } elseif ($numero == 8) {
            echo "Estamos en Agosto";
        } elseif ($numero == 9) {
            echo "Estamos en Septiembre";
        } elseif ($numero == 10) {
            echo "Estamos en Optubre";
        } elseif ($numero == 11) {
            echo "Estamos en Noviembre";
        } elseif ($numero == 12) {
            echo "Estamos en Diciembre";
        } else {
            echo "Valor no valido";
        }
        ?>
        ?>
    </div>
    </form>
    </div>
</body>

</html>