<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda - Formulário</title>
    <link rel="stylesheet" href="css/cadastrar.css">
</head>
</head>
<body>

<div class="form-container">
<a href="index.php" class="button return">Voltar</a>
    <h1>Agenda</h1>
    <form action="adicionarCtt.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="telefone">Telefone:</label>
        <input type="tel" id="telefone" name="telefone" placeholder="(XX) XXXXX-XXXX" required pattern="\(\d{2}\) \d{5}-\d{4}">

        <label for="endereco">Endereço:</label>
        <input type="text" id="endereco" name="endereco" required>

        <label for="valor">Valor a pagar:</label>
        <input type="text" id="valor" name="valor" required>
        
       
        <br><br><br><br>
        <button type="submit" class="btn-submit">Adicionar</button>
    </form>
    <script src="js/script.js"></script>
    
</div>

</body>
</html>
