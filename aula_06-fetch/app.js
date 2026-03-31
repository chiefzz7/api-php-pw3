async function carregarTurma() {
  try {
    const resposta = await fetch("api_turma.php");
    const dados = await resposta.json();

    document.getElementById("titulo").textContent = `Turma: ${dados.nome}`;
    document.getElementById("saida").textContent = JSON.stringify(dados, null, 2);
  } catch {
    document.getElementById("titulo").textContent = "Erro ao carregar dados";
  }
}