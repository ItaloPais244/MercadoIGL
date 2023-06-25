<?php
    namespace DAL; 
    include_once __DIR__. '\conexao.php';
    include_once  'C:\xampp\htdocs\MercadoIGL\MODEL\modelCliente.php';

   // include_once '../../servicos/DAL/conexao.php';
  //  include_once '../MODEL/Area.php';

    class dalCliente{

        public function Select(){
          $sql = "select * from cliente;";

          $con = Conexao::conectar(); 
          $result = $con->query($sql); 
          $con = Conexao::desconectar();
          
          //echo count ($result);
          
           //$lstAreas[] = new \MODEL\Area(); 
          foreach($result as $linha){
                        
            $cliente = new \MODEL\Cliente();
            
            $cliente->setCPF($linha['CPF']);
            $cliente->setNome($linha['Nome']);  
            $cliente->setEndereco($linha['Endereco']);       

          }
        
        }

          public function Insert(\MODEL\Cliente $cliente){
          
            //echo "CPF: ".  $operador->getCPF() . "</br>";
            //echo "Nome: ". $operador->getNome(). "</br>";
            //echo "Cargo: " . $operador->getCargo() . "</br>";
            //echo "Senha: " . $operador->getSenha() . "</br>";

            $con = Conexao::conectar(); 
            $sql = "INSERT INTO cliente (CPF, nome, endereco) VALUES  ('{$cliente->getCPF()}', '{$cliente->getNome()}','{$cliente->getEndereco()}');";
            $result = $con->query($sql); 
            $con = Conexao::desconectar();
            return $result; 
        }

       
    }

?> 