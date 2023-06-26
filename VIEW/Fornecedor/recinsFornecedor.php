<?php
    include_once 'C:\xampp\htdocs\MercadoIGL\MODEL\Fornecedor.php';
    include_once '../../BLL/bllForncedor.php';

    $fornecedor = new \MODEL\Fornecedor();

    $fornecedor->setCnpj($_POST['txtCnpj']);
    $fornecedor->setRazao($_POST['txtRazao']);
    $fornecedor->setTelefone($_POST['txtTelefone']);
    $fornecedor->setCidade($_POST['txtCidade']);

    $bll = new \BLL\bllFornecedor();
    $bll->Insert($fornecedor);

    header("location: lstFornecedor.php");
?>