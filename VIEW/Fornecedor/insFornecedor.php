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

    <title>Inserir Fornecedor</title>
</head>

<body>
    <?php include_once '../menu.php' ?>

    <div class="container indigo lighten-3 black-text col s12">
        <div class="center orange">
            <h1>Inserir Fornecedor</h1>
        </div>
        <div class="row">
            <form action="recinsFornecedor.php" method="POST" id="frminsFornecedor" class="col s12">
                <div class="input-field col s8">
                    <input id="cnpj" type="number" name="txtCnpj">
                    <label for="cnpj" class="black-text bold">CNPJ</label>
                </div>
                <div class="input-field col s8">
                    <input id="razao" type="text" name="txtRazao">
                    <label for="razao" class="black-text bold">RAZÃO SOCIAL</label>
                </div>
                <div class="input-field col s8">
                    <input id="telefone" type="number" name="txtTelefone">
                    <label for="telefone" class="black-text bold">TELEFONE</label>
                </div>
                <div class="input-field col s8">
                    <input id="cidade" type="text" name="txtCidade">
                    <label for="cidade" class="black-text bold">CIDADE</label>
                </div>
                <div class="brown lighten-3 center col s12">
                    <br>
                    <button class="waves-effect waves-light btn green" type="submit">Gravar <i
                            class="material-icons">save</i></button>
                    <button class="waves-effect waves-light btn red" type="reset">Limpar <i
                            class="material-icons">clear_all</i></button>
                    <button class="waves-effect waves-light btn blue" type="button">Voltar <i
                            class="material-icons">arrow_back</i></button>
                    <br>
                    <br>
                </div>
            </form>
        </div>
    </div>
    <?php include_once '../footer.php' ?>
</body>

</html>