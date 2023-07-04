// PHP

// Receber dados para alterar a sala de prova do candidato
$cpf = $_POST['cpf'];
$novaSala = $_POST['nova_sala'];

// Atualizar a sala de prova do candidato no banco de dados
$sql = "UPDATE candidatos SET sala_prova = '$novaSala' WHERE cpf = '$cpf'";
$conn->query($sql);

// Fechar conexão com o banco de dados
$conn->close();
