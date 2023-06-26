<?php
    include_once 'C:\xampp\htdocs\MercadoIGL\MODEL\Fornecedor.php';
    include_once '../../BLL/bllForncedor.php';

   $fornecedor = new \MODEL\Fornecedor(); 

   $fornecedor->setId($_POST['txtId']);
   $fornecedor->setCnpj($_POST['txtCnpj']);
   $fornecedor->setRazao($_POST['txtRazao']);
   $fornecedor->setTelefone($_POST['txtTelefone']);
   $fornecedor->setCidade($_POST['txtCidade']);

   $bll = new \BLL\bllFornecedor(); 
   $bll->Update($fornecedor); 

   header("location: lstFornecedor.php");
?>