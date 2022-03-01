<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promedio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container w-25">
        <br>
        <div class="mb-3">
            <h5>Calcular promedio</h5>
            <form action="" method="get">
                <div class="mb-3">
                    <label for="">Nota 1</label>
                    <input type="number" name="nota1" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Nota 2</label>
                    <input type="number" name="nota2" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Nota 3</label>
                    <input type="number" name="nota3" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Nota 4</label>
                    <input type="number" name="nota4" class="form-control">
                </div>
                <button class="btn btn-danger">Calcular</button>
            </form>
            <br>
            <?php
            print_r($_GET);
            $nota1 = $_GET["nota1"];
            $nota2 = $_GET["nota2"];
            $nota3 = $_GET["nota3"];
            $nota4 = $_GET["nota4"];
            $promedio = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
            echo "El promedio del estudiante es: " . $promedio;
            ?>
        </div>

    </div>
</body>

</html>