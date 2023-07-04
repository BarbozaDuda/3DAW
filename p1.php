// PHP

// Conexão com o banco de dados
$conn = new mysqli("localhost", "usuario", "senha", "database");

// Consulta SQL para obter os candidatos
$sql = "SELECT * FROM candidatos ORDER BY nome ASC";
$result = $conn->query($sql);

// Dividir candidatos em salas de prova com 50 candidatos cada
$salas = [];
$i = 1;
while ($row = $result->fetch_assoc()) {
    $sala = ceil($i / 50);
    $salas[$sala][] = $row;
    $i++;
}

// Exibir candidatos por sala de prova
foreach ($salas as $sala => $candidatos) {
    echo "Sala de prova: " . $sala . "<br>";
    foreach ($candidatos as $candidato) {
        echo "Nome: " . $candidato['nome'] . "<br>";
        echo "CPF: " . $candidato['cpf'] . "<br>";
        // Outras informações do candidato...
        echo "<br>";
    }
    echo "<br>";
}

// Fechar conexão com o banco de dados
$conn->close();