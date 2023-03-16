<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1-Questao</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
</head>

<body>
    <div class="d-flex align-items-center bg-dark justify-content-center" style="height: 100vh">
        <div class="card col-7 p-3">
            <div class="card-header d-flex justify-content-between">
                Digite 10 numeros :
                <a href="index.php" class="text-decoration-none">
                    <div class="d-flex  ">
                        <span class="iconify" data-icon="ic:baseline-home" data-width="50"></span>
                    </div>
                </a>
            </div>
            <div class="card-body">
                <form action="#" method="POST">
                    <div class="row mt-3 mb-3">
                        <div class="col">
                            <div class="input-group ">
                                <div class="input-group-text">1</div>
                                <input type="text" class="form-control" id="autoSizingInputGroup" name="n1" placeholder="Numero" required>
                            </div>
                        </div>

                        <div class="col">
                            <div class="input-group ">
                                <div class="input-group-text">2</div>
                                <input type="text" class="form-control" id="autoSizingInputGroup" name="n2" placeholder="Numero" required>
                            </div>
                        </div>

                        <div class="col">
                            <div class="input-group ">
                                <div class="input-group-text">3</div>
                                <input type="text" class="form-control" id="autoSizingInputGroup" name="n3" placeholder="Numero" required>
                            </div>
                        </div>


                        <div class="col">
                            <div class="input-group ">
                                <div class="input-group-text">4</div>
                                <input type="text" class="form-control" id="autoSizingInputGroup" name="n4" placeholder="Numero" required>
                            </div>
                        </div>

                        <div class="col">
                            <div class="input-group ">
                                <div class="input-group-text">5</div>
                                <input type="text" class="form-control" id="autoSizingInputGroup" name="n5" placeholder="Numero" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="input-group ">
                                <div class="input-group-text">6</div>
                                <input type="text" class="form-control" id="autoSizingInputGroup" name="n6" placeholder="Numero" required>
                            </div>
                        </div>

                        <div class="col">
                            <div class="input-group ">
                                <div class="input-group-text">7</div>
                                <input type="text" class="form-control" id="autoSizingInputGroup" name="n7" placeholder="Numero" required>
                            </div>
                        </div>

                        <div class="col">
                            <div class="input-group ">
                                <div class="input-group-text">8</div>
                                <input type="text" class="form-control" id="autoSizingInputGroup" name="n8" placeholder="Numero" required>
                            </div>
                        </div>


                        <div class="col">
                            <div class="input-group ">
                                <div class="input-group-text">9</div>
                                <input type="text" class="form-control" id="autoSizingInputGroup" name="n9" placeholder="Numero" required>
                            </div>
                        </div>

                        <div class="col">
                            <div class="input-group ">
                                <div class="input-group-text">10</div>
                                <input type="text" class="form-control" id="autoSizingInputGroup" name="n10" placeholder="Numero" required>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-end mt-3">
                        <button class="btn btn-primary">
                            Listar e Ordenar
                        </button>
                    </div>
                </form>
            </div>


            <?php
            if ($_POST) {
            ?>
                <h3>Numeros em ordem crescente: </h3>
                <div class="row mt-3 mb-3 p-3">

                    <?php
                    foreach ($_POST as $key => $num) {
                        $list[] = $num;
                    }
                    sort($list);
                    foreach ($list as $num) {
                    ?>

                        <div class="col">
                            <div class="input-group ">
                                <input type="text" class="form-control" id="autoSizingInputGroup" disabled value="<?= $num; ?>">
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
                </div>
        </div>

    </div>
</body>



</html>