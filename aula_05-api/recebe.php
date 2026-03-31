<?php
    $nome = $_POST["nome"] ?? "Sem nome"; //Se não houver nome, traga Sem Nome

    echo "Nome recebido: $nome";
    // ou
    echo " <br> Nome recebido: " . $nome;
?>
