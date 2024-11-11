<?php

include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") { // Verifica se o formulário foi enviado
    $idade = $_POST['idade']; // Recebe a nova idade
    $genero = $_POST['genero']; // Recebe o novo genero
    $nascimento = $_POST['nascimento']; // Recebe a nova data de nascimento
    $sql = "INSERT INTO feliz (idade, genero, data_de_nascimento) VALUES ('$idade', '$genero', '$nascimento')"; // Prepara a consulta

    // Executa a consulta e verifica se foi bem-sucedida
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); // Redireciona para a página principal
    } else {
        echo "Erro: " . $conn->error; // Mostra erro, se houver
    }
}

?>