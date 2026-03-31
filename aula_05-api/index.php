<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PW3 - API simples com PHP</title>
</head>
<body>

    <h1>Criando uma API simples usando PHP</h1>
    <p>Acesse <a href="api_turma.php">aqui</a> para ver o JSON</p>
    <p>Acesse <a href="api_boas_vindas.php">aqui</a> para as boas vindas</p>

    <h1>Formulário</h1>
    <form action="recebe.php" method="POST">
        <label> Nome: </label>
        <input type='text' name='nome'>
        <button type='submit'> Enviar </button>
    </form>

</body>
</html>