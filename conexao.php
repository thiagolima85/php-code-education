<?php

    try{
        $conexao = new \PDO("mysql:host=localhost;dbname=pdo", "root","123456");
        echo "Conectado com sucesso!!";
    }
    catch(\PDOException $e){
        die("Erro de código: ".$e->getCode().": ".$e->getMessage());
    }
?>
