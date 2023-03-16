<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>4-questao</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
</head>

<body>


    <div class=" d-flex align-items-center bg-dark justify-content-center" style="height: 100vh;">
        <div class="card text-center w-50">
            <div class="card-header d-flex justify-content-between">
                <h3>Login </h3>
                <a href="index.php" class="text-decoration-none">
                    <div class="d-flex  ">
                        <span class="iconify" data-icon="ic:baseline-home" data-width="50"></span>
                    </div>
                </a>
            </div>
            <div class="card-body">
                <form action="signin.php" method="POST">

                    <div class="form-floating mb-3">
                        <input type="email" class="form-control " id="floatingInput" placeholder="nome@exemplo.com" name="email" required>
                        <label for="floatingInput">Email</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Senha" name="senha" required>
                        <label for="floatingPassword">Senha</label>
                    </div>

                    <button type="submit" class="btn btn-primary m-3">Entrar</button>
                </form>

            </div>
        </div>

    </div>

    <?php
    if (isset($_GET['resp'])) {
    ?>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Email ou senha Incorreta!',
            })
        </script>
    <?php
    }
    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>