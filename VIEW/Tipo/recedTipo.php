<?php
    include_once 'C:\xampp\htdocs\MercadoIGL\MODEL\Tipo.php';
    include_once 'C:\xampp\htdocs\MercadoIGL\BLL\bllTipo.php';

   $tipo = new \MODEL\Tipo(); 

   $tipo->setId($_POST['txtId']);
   $tipo->setTipo($_POST['txtTipo']);

   $bll = new \BLL\bllTipo(); 
   $bll->Update($tipo); 

   header("location: lstTipo.php");
?>