<!-- create_question_mc.html -->

<!DOCTYPE html>
<html>
<head>
    <title>Criar Pergunta de Múltipla Escolha</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#saveQuestionMC').click(function() {
                var question = $('#question').val();
                var option1 = $('#option1').val();
                var option2 = $('#option2').val();
                var option3 = $('#option3').val();
                var option4 = $('#option4').val();
                var correctAnswer = $('#correctAnswer').val();

                // Enviar os dados para o servidor
                $.ajax({
                    url: 'save_question_mc.php',
                    type: 'POST',
                    data: {
                        question: question,
                        option1: option1,
                        option2: option2,
                        option3: option3,
                        option4: option4,
                        correctAnswer: correctAnswer
                    },
                    success: function(response) {
                        alert(response);
                    }
                });
            });
        });
    </script>
</head>
<body>
    <h1>Criar Pergunta de Múltipla Escolha</h1>

    <label>Pergunta:</label><br>
    <textarea id="question" rows="3" cols="50"></textarea><br><br>

    <label>Opções de Resposta:</label><br>
    <input type="text" id="option1" placeholder="Opção 1"><br>
    <input type="text" id="option2" placeholder="Opção 2"><br>
    <input type="text" id="option3" placeholder="Opção 3"><br>
    <input type="text" id="option4" placeholder="Opção 4"><br><br>

    <label>Resposta Correta:</label><br>
    <input type="text" id="correctAnswer" placeholder="Resposta Correta"><br><br>

    <button id="saveQuestionMC">Salvar</button>
</body>
</html>
<?php
$servername = "localhost";
$username = "seu_usuario";
$password = "sua_senha";
$dbname = "corporate_game";

$question = $_POST['question'];
$option1 = $_POST['option1'];
$option2 = $_POST['option2'];
$option3 = $_POST['option3'];
$option4 = $_POST['option4'];
$correctAnswer = $_POST['correctAnswer'];

// Criar a conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

// Inserir a pergunta e respostas na tabela
$sql = "INSERT INTO questions (question, option1, option2, option3, option4, correct_answer)
        VALUES ('$question', '$option1', '$option2', '$option3', '$option4', '$correctAnswer')";

if ($conn->query($sql) === TRUE) {
    echo "Pergunta salva com sucesso!";
} else {
    echo "Erro ao salvar a pergunta: " . $conn->error;
}

$conn->close();
?>
