<?php 
    header("Content-Type: application/json; charset=utf-8");

    $turma = [
        "nome" => "3DS-AMS",
        "periodo" => "tarde",
        "quantidade_alunos" => 30,
        "disciplinas" => ["PW3", "QTS", "BD2", "PAM2", "IP"]
    ];

    http_response_code(200);
    echo json_encode($turma, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

?>