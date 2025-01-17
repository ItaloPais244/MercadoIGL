<?php
    include_once '../../BLL/bllForncedor.php';
    $id = $_GET['id']; 

    $bll = new  \BLL\bllFornecedor(); 
    $fornecedor = $bll->SelectID($id);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Fornecedor</title>

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
            <h1>Editar Fornecedor</h1>
        </div>

        <div class="row">
            <form action="recedFornecedor.php" method="POST" id="frminsFornecedor" class="col s12">
                <div class="input-field col s8">
                    <label for="id" class="black-text bold">ID: <?php echo $fornecedor->getId();?></label>
                    </br> 
                    </br>
                    <input type="hidden" name="txtId" value=<?php echo $id; ?>>
                </div>

                <div class="input-field col s8">
                    <input id="cnpj" type="number" name="txtCnpj" value="<?php echo $fornecedor->getCnpj()?>">
                    <label for="cnpj" class="black-text bold">CNPJ</label>
                </div>

                <div class="input-field col s8">
                    <input id="razao" type="text" name="txtRazao" value="<?php echo $fornecedor->getRazao()?>">
                    <label for="razao" class="black-text bold">RAZÃO SOCIAL</label>
                </div>

                <div class="input-field col s8">
                    <input id="telefone" type="number" name="txtTelefone" value="<?php echo $fornecedor->getTelefone()?>">
                    <label for="telefone" class="black-text bold">Tipo</label>
                </div>

                <div class="input-field col s8">
                    <input id="cidade" type="text" name="txtCidade" value="<?php echo $fornecedor->getCidade()?>">
                    <label for="cidade" class="black-text bold">Tipo</label>
                </div>

                <div class="brown lighten-3 center col s12">
                    <br>
                    <button class="waves-effect waves-light btn green" type="submit">
                        Gravar <i class="material-icons">save</i>
                    </button>
                    <button class="waves-effect waves-light btn red" type="reset">
                        Limpar <i class="material-icons">clear_all</i>
                    </button>
                    <button class="waves-effect waves-light btn blue" type="button" onclick="JavaScript:location.href='lstFornecedor.php'"> 
                        Voltar <i class="material-icons">arrow_back</i>
                    </button>
                    <br>
                    <br>
                </div>
            </form>
        </div>
    </div>
    <?php include_once '../footer.php' ?>
</body>

</html>