// Arquivo de exemplo

fetch("api_turma.php")
  .then((resposta) => resposta.json())
  .then((dados) => {
    console.log(dados);
  });