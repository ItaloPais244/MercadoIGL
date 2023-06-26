<?php
    include_once 'C:\xampp\htdocs\MercadoIGL\MODEL\Tipo.php';
    include_once 'C:\xampp\htdocs\MercadoIGL\BLL\bllTipo.php';

    $tipo = new \MODEL\Tipo();

    $tipo->setTipo($_POST['txtTipo']);

    $bll = new \BLL\bllTipo();
    $bll->Insert($tipo);

    header("location: lstTipo.php");
?>