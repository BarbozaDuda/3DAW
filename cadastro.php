<?php

// Função para incluir um novo aluno
function incluirAluno() {
    // Código para incluir um novo aluno no sistema
    echo "Funcionalidade: Incluir novo aluno\n";
}

// Função para alterar um aluno existente
function alterarAluno() {
    // Código para alterar um aluno existente no sistema
    echo "Funcionalidade: Alterar aluno existente\n";
    // Obter a matrícula do aluno a ser alterado
    $matricula = readline("Digite a matrícula do aluno: ");
    echo "Aluno com a matrícula $matricula alterado com sucesso!\n";
}

// Função para listar todos os alunos
function listarAlunos() {
    // Código para listar todos os alunos cadastrados no sistema
    echo "Funcionalidade: Listar todos os alunos\n";
}

// Função para listar um aluno específico
function listarAluno() {
    // Código para listar um aluno específico com base na matrícula
    echo "Funcionalidade: Listar um aluno específico\n";
    // Obter a matrícula do aluno a ser listado
    $matricula = readline("Digite a matrícula do aluno: ");
    echo "Dados do aluno com a matrícula $matricula:\n";
    // Exibir os dados do aluno encontrado
}

// Função para excluir um aluno
function excluirAluno() {
    // Código para excluir um aluno do sistema
    echo "Funcionalidade: Excluir aluno\n";
    // Obter a matrícula do aluno a ser excluído
    $matricula = readline("Digite a matrícula do aluno: ");
    echo "Aluno com a matrícula $matricula excluído com sucesso!\n";
}

// Função para exibir o menu
function exibirMenu() {
    echo "======= MENU =======\n";
    echo "1. Incluir novo aluno\n";
    echo "2. Alterar aluno existente\n";
    echo "3. Listar todos os alunos\n";
    echo "4. Listar um aluno específico\n";
    echo "5. Excluir aluno\n";
    echo "6. Sair\n";
    echo "=====================\n";
}

// Loop do menu
while (true) {
    exibirMenu();
    $opcao = readline("Digite a opção desejada: ");
    switch ($opcao) {
        case 1:
            incluirAluno();
            break;
        case 2:
            alterarAluno();
            break;
        case 3:
            listarAlunos();
            break;
        case 4:
            listarAluno();
            break;
        case 5:
            excluirAluno();
            break;
        case 6:
            echo "Saindo...\n";
            exit;
        default:
            echo "Opção inválida. Por favor, digite uma opção válida.\n";
    }
}
?>
