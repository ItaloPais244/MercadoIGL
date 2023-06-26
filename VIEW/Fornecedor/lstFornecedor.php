<?php
    use BLL\bllFornecedor;
    include_once '../../BLL/bllForncedor.php';
    $bll = new \BLL\bllFornecedor;
    $lstFornecedor = $bll->Select();
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

    <h1>Tabela de Fornecedores</h1>

    <table class="striped blue">
        <tr>
            <th>ID</th>
            <th>CNPJ</th>
            <th>RAZAO SOCIAL</th>
            <th>TELEFONE</th>
            <th>CIDADE</th>
            <th>FUNÇÃO -
                <a class="btn-floating btn-small waves-effect waves-light green"
                    onclick="JavaScript:location.href='insFornecedor.php'">
                    <i class="material-icons">add</i>
                </a>
            </th>
        </tr>
        <?php
            foreach($lstFornecedor as $fornecedor){
        ?>
        <tr>
            <td><?php echo $fornecedor->getId(); ?></td>
            <td><?php echo $fornecedor->getCnpj(); ?></td>
            <td><?php echo $fornecedor->getRazao(); ?></td>
            <td><?php echo $fornecedor->getTelefone(); ?></td>
            <td><?php echo $fornecedor->getCidade(); ?></td>
            <td>
                <a class="btn-floating btn-small waves-effect waves-light orange" onclick="JavaScript:location.href='edtFornecedor.php?id=' +
                                     <?php echo $fornecedor->getId();?>">
                    <i class="material-icons">edit</i>
                </a>
                <a class="btn-floating btn-small waves-effect waves-light blue" onclick="JavaScript:location.href='detFornecedor.php?id=' +
                                     <?php echo $fornecedor->getId();?>">
                    <i class="material-icons">details</i>
                </a>
                <a class="btn-floating btn-small waves-effect waves-light red" onclick="JavaScript:remover(<?php echo $fornecedor->getId();?>)">
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
        if (confirm('Excluir o Fornecedor ' + id + '?')){
            location.href = 'remFornecedor.php?id=' + id;
        }
    }
</script>