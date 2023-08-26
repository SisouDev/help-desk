<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abrir chamado</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel=" stylesheet" href="./css/bootstrap.css">
</head>

<body>
    <main>
        <nav class="navbar nav-style">
            <a class="navbar-brand" href="#">
                <img src="./css/images/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
                App Help Desk
            </a>
        </nav>
        <section class="container-md p-4 mt-2">
            <section class="row">

                <section class="card-abrir-chamado p-4">
                    <section class="card">
                        <section class="card-header header-c">
                            Abertura de chamado
                        </section>
                        <section class="card-body">
                            <section class="row">
                                <section class="col">

                                    <form>
                                        <section class="form-group">
                                            <label>Título</label>
                                            <input type="text" class="form-control" placeholder="Título">
                                        </section>

                                        <section class="form-group">
                                            <label>Categoria</label>
                                            <select class="form-control">
                                                <option>Criação Usuário</option>
                                                <option>Impressora</option>
                                                <option>Hardware</option>
                                                <option>Software</option>
                                                <option>Rede</option>
                                            </select>
                                        </section>

                                        <section class="form-group">
                                            <label>Descrição</label>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </section>

                                        <section class="row mt-5">
                                            <section class="col-6">
                                                <button class="btn btn-lg btn-login btn-block"
                                                    type="submit">Voltar</button>
                                            </section>

                                            <section class="col-6">
                                                <button class="btn btn-login btn-block" type="submit">Abrir</button>
                                            </section>
                                        </section>
                                    </form>

                                </section>
                            </section>
                        </section>
                    </section>
                </section>
            </section>
    </main>
</body>

</html>