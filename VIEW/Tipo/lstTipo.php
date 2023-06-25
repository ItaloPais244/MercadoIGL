<?php
    use BLL\bllTipo;
    include_once '/xampp/htdocs/MercadoIGL/BLL/bllTipo.php';
    $bll = new \BLL\bllTipo();
    $lstTipo = $bll->Select();
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
    <title>Listar Tipo</title>
</head>
<body>
    <h1>Listar Tipo dos Produtos</h1>

    <table class="striped blue">
        <tr>
            <th>ID</th>
            <th>TIPO</th>
        </tr>
        <?php
            foreach($lstTipo as $tipo){
        ?>
            <tr>
                <td><?php echo $tipo->getId(); ?></td>
                <td><?php echo $tipo->getTipo(); ?></td>
            </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>