<?php 
    session_start();
    echo $_SESSION['x'];
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help Desk</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel=" stylesheet" href="./css/bootstrap.css">
</head>

<body>
    <nav class="navbar nav-style">
        <a class="navbar-brand" href="#">
            <img src="./css/images/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
            App Help Desk
        </a>
    </nav>
    <main class="d-flex justify-content-center">
        <section class="p-3 w-50">
            <div class="container-sm">
                <div class="row">
                    <div class="card-login p-2">
                        <div class="card">
                            <div class="card-header text-center header-c">
                                Login
                            </div>
                            <div class="card-body">
                                <form action="valida_login.php" method="post">
                                    <div class="form-group p-2">
                                        <input name="email" type="email" class="form-control" placeholder="E-mail">
                                    </div>
                                    <div class="form-group p-2">
                                        <input name="senha" type="password" class="form-control" placeholder="Senha">
                                    </div>
                                    <?php
                                        if(isset($_GET['login']) && $_GET['login'] =='erro'){
                                        
                                    ?>

                                    <section class="text-danger text-center">
                                        Usuário ou senha inválidos.
                                    </section>

                                    <?php } ?>
                                    <div class="d-grid gap-2 col-6 mx-auto">
                                        <button class="btn btn-lg btn-login" type="submit">Entrar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

</body>

</html>