<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3-questao</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
</head>

<body>
    <div class="d-flex flex-column bg-dark align-items-center bg-dark justify-content-center" style="min-height: 100vh;">

        <div class="card col-6 " style="background-color: #777;">
            <div class="card-header d-flex justify-content-between">
                <h2 class="text-light ">Sistema de parcelamento</h2>
                <a href="index.php" class="text-decoration-none">
                    <div class="d-flex  ">
                        <span class="iconify" data-icon="ic:baseline-home" data-width="50"></span>
                    </div>
                </a>
            </div>
            <div class="card-body ">
                <p> Digite os valores:</p>

                <form class="row row-gap-3" action="#" method="post">
                    <div class="row ">
                        <div class="input-group w-50">
                            <div class="input-group-text">Valor total:</div>
                            <input type="number" class="form-control " id="autoSizingInputGroup" name="valor" required min='0'>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="input-group w-50">
                            <div class="input-group-text">Qtd de parcelas:</div>
                            <input type="number" class="form-control " id="autoSizingInputGroup" name="parcelas" placeholder="Numero" required min='1'>
                        </div>
                        <small>*caso escolha Potencia este campo será o expoente.</small>
                    </div>

                    <div class="d-flex  justify-content-end">
                        <button> Emitir parcelas</button>
                    </div>

                </form>
                <?php
                if ((isset($_POST['valor'])) && (isset($_POST['parcelas']))) {
               
                    $vParcelas = $_POST['valor'] / $_POST['parcelas'];
                    $mes = date('m') + 1;
                    $dia = date('d');
                    $ano = date('Y');
                ?>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Vencimento</th>
                                <th scope="col">Parcela</th>
                                <th scope="col">Valor</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            for($i=1;$i<=$_POST['parcelas'];$i++){
                                ?>
                            <tr>
                                <td><?= $dia?>/<?= $mes?>/<?= $ano?></td>
                                <td><?=$i?></td>
                                <td>R$ <?= $vParcelas?></td>
                            </tr>
                            <?php
                            $mes++;
                            if($mes == 12){
                                $mes=1;
                                $ano++;
                            }
                            }
                            ?>
                            
                            
                        </tbody>
                    </table>
                <?php
                }
                ?>
            </div>


        </div>


    </div>


</body>

</html>