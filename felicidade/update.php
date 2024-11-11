<?php
include 'conexao.php'; // Inclui o arquivo de conexão

if (isset($_GET['id'])) { // Verifica se o ID foi passado
    $id = $_GET['id']; // Recebe o ID
    $sql = "SELECT * FROM feliz WHERE id=$id"; // Consulta o usuário
    $result = $conn->query($sql); // Executa a consulta
    $feliz = $result->fetch_assoc(); // Obtém os dados do usuário
}

// Se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idade = $_POST['idade']; // Recebe a nova idade
    $genero = $_POST['genero']; // Recebe o novo genero
    $nascimento = $_POST['data_de_nascimento']; // Recebe a nova data de nascimento
    $sql = "UPDATE feliz SET idade='$idade', genero='$genero' data_de_nascimento='$nascimento' WHERE id=$id"; // Prepara a atualização

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); // Redireciona se a atualização for bem-sucedida
    } else {
        echo "Erro: " . $conn->error; // Mostra erro, se houver
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Atualizar Usuário</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Atualizar Usuário</h1>
    <form action="" method="POST">
        <label>Idade:</label>
        <input type="number" name="idade" value="<?php echo $feliz['idade']; ?>" required>

        <label>Gênero:</label>
        <input type="text" name="genero" value="<?php echo $feliz['genero']; ?>" required>

        <input type="date" name="data_de_nascimento" value="<?php echo $feliz['data_de_nascimento']; ?>">
        <input type="submit" value="Atualizar">
    </form>
    <a href="index.php" class="cancel">Cancelar</a> <!-- Link para voltar -->
</body>

</html>