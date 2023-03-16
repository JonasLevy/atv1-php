<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5-questao</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
</head>

<body>
    <div class="d-flex align-items-center bg-dark justify-content-center" style="height: 100vh">
        <div class="card col-7 p-3">
            <div class="card-header d-flex justify-content-between">
                <h3> Click para gerar os numeros da sorte! </h3>
                <a href="index.php" class="text-decoration-none">
                    <div class="d-flex  ">
                        <span class="iconify" data-icon="ic:baseline-home" data-width="50"></span>
                    </div>
                </a>
            </div>
            <div class="card-body">
                <form action="megasena.php" method="POST">
                    <div class="d-flex align-items-center justify-content-center mt-3">
                        <button class="btn btn-primary" onclick="()=>test()">
                            Gerar numeros
                        </button>
                    </div>
                </form>

            </div>

            <?php
            if (isset($_GET['gerar'])) {
            ?>
                <div class="d-flex justify-content-around ">
                    <?php
                    $arrayMega = array();
                    for ($i = 1; $i <= 6;) {
                        $numero = rand(1, 60);
                        if (!in_array($numero, $arrayMega)) {
                            $arrayMega[] = $numero;
                            ?>
                            <div class="d-flex border border-4 bg-primary border-dark rounded-circle p-3 fw-bold text-light ">
                                <?=$numero?>
                            </div>

                            <?php 
                            $i++;
                        }
                    }
                    ?>
                </div>
            <?php } ?>
        </div>
    </div>

    </div>

    <script>

    </script>
</body>



</html>