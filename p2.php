// PHP

// Receber dados do novo fiscal de prova
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$sala = $_POST['sala'];

// Inserir fiscal de prova no banco de dados
$sql = "INSERT INTO fiscais (nome, cpf, sala_prova) VALUES ('$nome', '$cpf', '$sala')";
$conn->query($sql);

// Fechar conexão com o banco de dados
$conn->close();
