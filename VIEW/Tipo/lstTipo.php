<?php
    use BLL\bllTipo;
    include_once 'C:\xampp\htdocs\MercadoIGL\BLL\bllTipo.php';
    $bll = new \BLL\bllTipo;
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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Listar Tipo</title>
</head>

<body>
    <?php include_once '../menu.php' ?>

    <h1>Listar Tipo dos Produtos</h1>



    <table class="striped blue">
        <tr>
            <th>ID</th>
            <th>TIPO</th>
            <th>FUNÇÃO -
                <a class="btn-floating btn-small waves-effect waves-light green"
                    onclick="JavaScript:location.href='insTipo.php'">
                    <i class="material-icons">add</i>
                </a>
            </th>
        </tr>
        <?php
            foreach($lstTipo as $tipo){
        ?>
        <tr>
            <td><?php echo $tipo->getId(); ?></td>
            <td><?php echo $tipo->getTipo(); ?></td>
            <td>
                <a class="btn-floating btn-small waves-effect waves-light orange" onclick="JavaScript:location.href='edtTipo.php?id=' +
                                     <?php echo $tipo->getId();?>">
                    <i class="material-icons">edit</i>
                </a>
                <a class="btn-floating btn-small waves-effect waves-light blue" onclick="JavaScript:location.href='detTipo.php?id=' +
                                     <?php echo $tipo->getId();?>">
                    <i class="material-icons">details</i>
                </a>
                <a class="btn-floating btn-small waves-effect waves-light red" onclick="JavaScript:remover(<?php echo $tipo->getId();?>)">
                    <i class="material-icons">delete</i>
                </a>
            </td>
        </tr>
        <?php
            }
        ?>
    </table>

    <?php include_once '../footer.php' ?>
</body>

</html>

<script>
    function remover(id){
        if (confirm('Excluir o Tipo do Produto ' + id + '?')){
            location.href = 'remTipo.php?id=' + id;
        }
    }
</script>