<?php
    include("configuration/connect.php");
    include_once './view/includes/header.php';
?>
    <div class="row justify-content-center">
        <div class="col col-md-6 mt-5">
            <h3 class="text-dark mb-5">Novo Cliente</h3>
            <form action="./criar.php" method="POST">
                <div class="mb-3 form-floating">
                    <input type="text" class="form-control" name="nome" id="floatingNome" placeholder="Digite o Nome">
                    <label for="floatingNome">Nome</label>
                </div>
                <div class="mb-3 form-floating">
                    <input type="text" class="form-control" name="sobrenome" id="floatingSobrenome" placeholder="Digite o Sobrenome">
                    <label for="floatingSobrenome">Sobrenome</label>
                </div>
                <div class="mb-3 form-floating">
                    <input type="email" class="form-control" name="email" id="floatingEmail" placeholder="Digite o E-mail">
                    <label for="floatingEmail">E-mail</label>
                </div>
                <div class="mb-3 form-floating">
                    <input type="text" class="form-control" name="idade" id="floatingIdade" placeholder="Digite a idade">
                    <label for="floatingIdade">Idade</label>
                </div>
           
                <button type="submit" name="btn-cadastrar" class="btn btn-primary">Cadastrar Cliente</button>
                <a href="index.php" class="btn btn-success">Lista de Clientes</a>
            </form>
        </div>
    </div>
    
<?php    
    include_once './view/includes/footer.php';
?>
