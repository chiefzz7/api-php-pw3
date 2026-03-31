<?php

    header("Content-Type: application/json; charset=utf-8");

    $alunos = [
        "Nome da Escola" => "Fatec de Registro",
        "Turma" => "3° AMS",
        "Alunos" => [
            "Samuel",
            "Mariah",
            "Cristiano Ronaldo",
            "Tesouro",
            "Kaká"
        ]
    ];

    http_response_code(200);
    echo json_encode($alunos, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

?>