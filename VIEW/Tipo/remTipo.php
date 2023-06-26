<?php
    include_once 'C:\xampp\htdocs\MercadoIGL\MODEL\Tipo.php';
    include_once 'C:\xampp\htdocs\MercadoIGL\BLL\bllTipo.php';

    $id = $_GET['id'];

   $bll = new \BLL\bllTipo(); 
   $bll->Delete($id); 

   header("location: lstTipo.php");
?>