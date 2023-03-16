<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body style="background-color: #334;">

    <?php
    $email = "email@atividade.com";
    $senha = "12345";

    if ($_POST['email'] != $email || $_POST['senha'] != $senha) {
        header("location: 4-questao.php?resp=email_invalido");
    }elseif ($_POST['email'] == $email || $_POST['senha'] == $senha) {
       
        ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Ok..!!',
                text: 'Login efetuado com sucesso!',
            })
        </script>
    <?php
    }
    ?>
    
</body>

</html>