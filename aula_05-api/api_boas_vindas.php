<?php
    $nome = $_GET["nome"] ?? "Visitante"; //Se não existir nada, retorne como Visitante

    echo json_encode([
        "menssagem" => "Ola, $nome"
    ]);
?>