<?php
    session_start();
    if (!isset($_SESSION['login']))
        header("location: index.html");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Listar Tipo</title>
</head>

<body>
    <nav>
        <div class="nav-wrapper orange">
            <a href="#" class="brand-logo right">MERCADO IGL</a>
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="../VIEW/Tipo/lstTipo.php">Tipo</a></li>
                <li><a href="badges.html">Produtos</a></li>
                <li><a href="collapsible.html">Venda</a></li>
                <li><a href="../VIEW/Fornecedor/lstFornecedor.php">Fornecedor</a></li>
                <li><a href="collapsible.html">Cliente</a></li>
                <li><a href="badges.html">Funcionario</a></li>
                <li><a href="collapsible.html">Cargo</a></li>
                <li><a href="../../VIEW/logout.php">Logout</a></li>
            </ul>
        </div>
    </nav>
</body>

</html>