<?php
    include_once '../../BLL/bllForncedor.php';
    $id = $_GET['id']; 

    $bll = new \BLL\bllFornecedor(); 
    $fornecedor = $bll->SelectID($id);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes Operador</title>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>


    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <?php include_once '../menu.php' ?>

    <div class="container teal lighten-5 black-text col s12">
        <div class="center orange">
            <h1>Detalhes do Fornecedor</h1>
        </div>

        <div class="row">
            <div class="container">
                <label for="id" class="black-text bold">
                    <h5>ID: <?php echo $fornecedor->getId(); ?></h5>
                </label>
                <input type="hidden" name="txtId" value=<?php echo $fornecedor->getId(); ?>>
                <label for="cnpj" class="black-text bold">
                    <h5>CNPJ: <?php echo $fornecedor->getCnpj(); ?></h5>
                </label>
                <label for="razao" class="black-text bold">
                    <h5>RAZÃO SOCIAL: <?php echo $fornecedor->getRazao(); ?></h5>
                </label>
                <label for="telefone" class="black-text bold">
                    <h5>TELEFONE: <?php echo $fornecedor->getTelefone(); ?></h5>
                </label>
                <label for="cidade" class="black-text bold">
                    <h5>CIDADE: <?php echo $fornecedor->getCidade(); ?></h5>
                </label>
                <div class="brown lighten-3 center col s12">
                    <br>
                    <button class="waves-effect waves-light btn orange" type="button" onclick="JavaScript:location.href='edtFornecedor.php?id=' +
                                     <?php echo $fornecedor->getId();?>">
                        Editar <i class="material-icons">edit</i>
                    </button>

                    <button class="waves-effect waves-light btn red" type="button"
                        onclick="JavaScript:remover(<?php echo $fornecedor->getId();?>)">
                        Remover <i class="material-icons">delete</i>
                    </button>

                    <button class="waves-effect waves-light btn blue" type="button"
                        onclick="JavaScript:location.href='lstFornecedor.php'">
                        Voltar <i class="material-icons">arrow_back</i>
                    </button>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </div>
    <?php include_once '../footer.php' ?>
</body>

</html>

<script>
function remover(id) {
    if (confirm('Excluir o Fornecedor ' + id + '?')) {
        location.href = 'remFornecedor.php?id=' + id;
    }
}
</script>