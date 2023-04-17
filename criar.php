<?php

    require_once './configuration/connect.php';

    if(isset($_POST['btn-cadastrar'])){
        // $nome = msqli_escape_string($connect, $_POST['nome']);
        // $sobrenome = msqli_escape_string($connect, $_POST['sobrenome']);
        // $email= msqli_escape_string($connect, $_POST['email']);
        // $idade = msqli_escape_string($connect, $_POST['idade']);

        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $email= $_POST['email'];
        $idade =  $_POST['idade'];
        

        $sql = "INSERT INTO clientes (nome, sobrenome, email,  idade) 
            VALUES ('$nome', '$sobrenome', '$email',  '$idade')";

        if(mysqli_query($connect, $sql)):
            header('Location: ./index.php?sucesso');
        else:
            header('Location: ./index.php?erro');
        endif;
    }
?>