<?php
    include("./configuration/connect.php");
    include_once './view/includes/header.php';
?>
    <div class="row justify-content-center">
        <div class="col col-md-6 mt-5">
            <h3 class="text-dark">Clientes</h3>
            <table class="table table-thite table-hover">
                <thead>
                    <tr>
                        <th scope="col">Nome:</th>
                        <th scope="col">Sobrenome:</th>
                        <th scope="col">E-mail:</th>
                        <th scope="col">Idade:</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql = "SELECT * FROM clientes";
                        $resultado = mysqli_query($connect, $sql);
                        while($dados = msqli_fetch_array())        
                    ?>

                    <tr>
                        <td>Allan</td>
                        <td>Patrick Mateus</td>
                        <td>allan.patrick@gmail.com</td>
                        <td>21</td>
                        <td>
                            <a href="" type="button" class="btn btn-group btn-warning btn-sm">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <a href="" type="button" class="btn btn-group btn-danger btn-sm">
                                <i class="bi bi-trash"></i>
                            </a>
                        </td>
                    </tr>                    
                </tbody>
            </table>
            <a href="adicionar.php" class="btn btn-success">Adicionar cliente</a>
        </div>
    </div>
    
<?php    
    include_once './view/includes/footer.php';
?>
