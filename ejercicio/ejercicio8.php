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
                <label for="">Digita numero</label><input type="text">
            </div>
            <br>
            <button class="btn btn-danger">Enviar</button>
        </form>
        <br>
        <?php
        print_r($_GET);
        ?>
    </div>
    </form>
    </div>
</body>

</html>