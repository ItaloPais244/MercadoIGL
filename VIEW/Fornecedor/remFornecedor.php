<?php
    include_once 'C:\xampp\htdocs\MercadoIGL\MODEL\Tipo.php';
    include_once '../../BLL/bllForncedor.php';

    $id = $_GET['id'];

    $bll = new \BLL\bllFornecedor(); 
    $bll->Delete($id); 

    header("location: lstFornecedor.php");
?>