<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2-questao</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
</head>

<body>
    <div class="d-flex flex-column bg-dark align-items-center bg-dark justify-content-center" style="height: 100vh;">

        <div class="card col-6 " style="background-color: #777;">
            <div  class="card-header d-flex justify-content-between">
                <h2 class="text-light ">Calculadora</h2>
                <a href="index.php" class="text-decoration-none">
                    <div class="d-flex bg-success ">
                        <span class="iconify" data-icon="ic:baseline-home" data-width="50"></span>
                    </div>
                </a>
            </div>
            <div class="card-body ">
                <p> Digite os valores:</p>
                
                <form class="row row-gap-3" action="#" method="post">
                    <div class="row ">
                        <div class="input-group w-50">
                            <div class="input-group-text">Primeiro valor:</div>
                            <input type="number" class="form-control " id="autoSizingInputGroup" name="n1" placeholder="Numero" required min='0'>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="input-group w-50">
                            <div class="input-group-text">Segundo valor:</div>
                            <input type="number" class="form-control " id="autoSizingInputGroup" name="n2" placeholder="Numero" required min='0'>
                        </div>
                        <small>*caso escolha Potencia este campo será o expoente.</small>
                    </div>

                    <div class="d-flex  justify-content-around">
                        <div class=" d-flex gap-1">
                            <input class="form-check-input" type="radio" value="soma" id="flexCheckDefault" name="operador">
                            <label class="form-check-label" for="flexCheckDefault">
                                Soma
                            </label>
                        </div>
                        <div class=" d-flex gap-1">
                            <input class="form-check-input" type="radio" value="subtrair" id="flexCheckDefault" name="operador">
                            <label class="form-check-label" for="flexCheckDefault">
                                Subtrair
                            </label>
                        </div>
                        <div class=" d-flex gap-1">
                            <input class="form-check-input" type="radio" value="multiplicar" id="flexCheckDefault" name="operador">
                            <label class="form-check-label" for="flexCheckDefault">
                                Multiplicar
                            </label>
                        </div>
                        <div class=" d-flex gap-1">
                            <input class="form-check-input" type="radio" value="dividir" id="flexCheckDefault" name="operador">
                            <label class="form-check-label" for="flexCheckDefault">
                                Dividir
                            </label>
                        </div>
                    </div>

                    <div class="d-flex  justify-content-around">
                        <div class=" d-flex gap-1">
                            <input class="form-check-input" type="radio" value="potencia" id="flexCheckDefault" name="operador">
                            <label class="form-check-label" for="flexCheckDefault">
                                Potenciação
                            </label>
                        </div>
                        <div class=" d-flex gap-1">
                            <input class="form-check-input" type="radio" value="raiz" id="flexCheckDefault" name="operador">
                            <label class="form-check-label" for="flexCheckDefault">
                                Raiz quadrada
                            </label>
                        </div>
                    </div>
                    <div class="d-flex  justify-content-end">
                        <button> Realizar operação</button>
                    </div>

                </form>
                <?php
                if (!(isset($_POST['n1'])) || !(isset($_POST['n2']))) {
                ?>
                    <h3>Digite  os valores</h3>
                <?php
                } elseif (!(isset($_POST['operador']))) {
                ?>
                    <h3>Selecione um operador</h3>
                <?php
                }else{
                    if($_POST['operador'] == "soma"){
                        $result = $_POST['n1'] + $_POST['n2'];
                        echo "<h3>Resultado da soma de ".$_POST['n1']." + ".$_POST['n2']." = ".$result."</h3>";   
                    }elseif($_POST['operador'] == "subtrair"){
                        $result = $_POST['n1'] - $_POST['n2'];
                        echo "<h3>Resultado da subitração de ".$_POST['n1']." - ".$_POST['n2']." = ".$result."</h3>";   
                    }elseif($_POST['operador'] == "multiplicar"){
                        $result = $_POST['n1'] * $_POST['n2'];
                        echo "<h3>Resultado da multiplicação de  ".$_POST['n1']."  x ".$_POST['n2']." = ".$result."</h3>";   
                    }elseif($_POST['operador'] == "potencia"){
                        $result = pow($_POST['n1'], $_POST['n2']);
                        echo "<h3>".$_POST['n1']."  elevado a  ".$_POST['n2']." = ".$result."</h3>";   
                    }elseif($_POST['operador'] == "raiz"){
                        $result = pow($_POST['n1'], $_POST['n2']);
                        $raiz1 =  sqrt($_POST['n1']);
                        $raiz2 =sqrt($_POST['n2']);   
                        echo "<h3> A raiz quadrada de ". $_POST['n1']. " = $raiz1 <br> A raiz quadrada de ". $_POST['n2']. " = $raiz2 </h3>";
                    }
                }
                ?>
            </div>


        </div>


    </div>


</body>

</html>