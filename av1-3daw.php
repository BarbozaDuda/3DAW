<!-- create_question_mc.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Criar Pergunta de Múltipla Escolha</title>
</head>
<body>
    <h1>Criar Pergunta de Múltipla Escolha</h1>

    <form action="save_question_mc.php" method="post">
        <label>Pergunta:</label><br>
        <textarea name="question" rows="3" cols="50"></textarea><br><br>

        <label>Opções de Resposta:</label><br>
        <input type="text" name="option1" placeholder="Opção 1"><br>
        <input type="text" name="option2" placeholder="Opção 2"><br>
        <input type="text" name="option3" placeholder="Opção 3"><br>
        <input type="text" name="option4" placeholder="Opção 4"><br><br>

        <label>Resposta Correta:</label><br>
        <input type="text" name="correct_answer" placeholder="Resposta Correta"><br><br>

        <input type="submit" value="Salvar">
    </form>
</body>
</html>
<!-- save_question_mc.php -->

<?php
$question = $_POST['question'];
$options = array($_POST['option1'], $_POST['option2'], $_POST['option3'], $_POST['option4']);
$correctAnswer = $_POST['correct_answer'];

$data = array(
    'question' => $question,
    'options' => $options,
    'correct_answer' => $correctAnswer
);

$jsonData = json_encode($data);

// Salvando a pergunta no arquivo de texto
$file = fopen('questions.txt', 'a');
fwrite($file, $jsonData . PHP_EOL);
fclose($file);

echo "Pergunta salva com sucesso!";
?>
<!-- create_question_text.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Criar Pergunta de Texto</title>
</head>
<body>
    <h1>Criar Pergunta de Texto</h1>

    <form action="save_question_text.php" method="post">
        <label>Pergunta:</label><br>
<!-- create_question_mc.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Criar Pergunta de Múltipla Escolha</title>
</head>
<body>
    <h1>Criar Pergunta de Múltipla Escolha</h1>

    <form action="save_question_mc.php" method="post">
        <label>Pergunta:</label><br>
        <textarea name="question" rows="3" cols="50"></textarea><br><br>

        <label>Opções de Resposta:</label><br>
        <input type="text" name="option1" placeholder="Opção 1"><br>
        <input type="text" name="option2" placeholder="Opção 2"><br>
        <input type="text" name="option3" placeholder="Opção 3"><br>
        <input type="text" name="option4" placeholder="Opção 4"><br><br>

        <label>Resposta Correta:</label><br>
        <input type="text" name="correct_answer" placeholder="Resposta Correta"><br><br>

        <input type="submit" value="Salvar">
    </form>
</body>
</html>
