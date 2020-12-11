<?php

    $servidor = "localhost:3306";
    $usuario = "root";
    $senha = "";
    $dbname = "sebo";
    
       //Criar a conexao
    
    $conn = @mysqli_connect($servidor, $usuario, $senha, $dbname)
    or die ("<b>Desculpe! Ocorreu algum problema de conexão.</b>");
//571414085

?>