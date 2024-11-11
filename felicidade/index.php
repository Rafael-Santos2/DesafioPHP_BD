<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/sus-sistema-unico-de-saude-removebg-preview.png" type="image/png">
    <link rel="stylesheet" href="style.css">
    <title>Sistema de saúde</title>
</head>
<body>
    <header>
        <img src="img/sus-sistema-unico-de-saude-removebg-preview.png" alt="foto sus" id="sus">
    </header>
    <h1>Gerenciamento de Pacientes</h1>
    <form action="store.php" method="POST">
        <label>Idade:</label>
        <input type="number" name="idade" required>
        <label>Genero:</label>
        <input type="text" name="genero" required>
        <label>Nascimento</label>
        <input type="date" name="nascimento">
        <input type="submit" value="Adicionar Usuário">
    </form>

    <h2>Lista de usuarios</h2>

    <div>
        <?php include 'read.php'; ?>
    </div>
</body>
</html>