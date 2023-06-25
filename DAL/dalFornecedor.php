<?php
    namespace DAL; 
    include_once __DIR__. '\conexao.php';
    include_once  'C:\xampp\htdocs\MercadoIGL\MODEL\modelFornecedor.php';

   // include_once '../../servicos/DAL/conexao.php';
  //  include_once '../MODEL/Area.php';

    class dalFornecedor{

        public function Select(){
          $sql = "select * from fornecedor;";

          $con = Conexao::conectar(); 
          $result = $con->query($sql); 
          $con = Conexao::desconectar();
          
          //echo count ($result);
          
           //$lstAreas[] = new \MODEL\Area(); 
          foreach($result as $linha){
                        
            $fornecedor = new \MODEL\Fornecedor();
            
            $fornecedor->setCNPJ($linha['CNPJ']);
            $fornecedor->setRazaoSocial($linha['Razao Social']);  
            $fornecedor->setTelefone($linha['Telefone']);      
            $fornecedor->setCidade($linha['Cidade']);  

          }
                   
        }


        public function Insert(\MODEL\Fornecedor $fornecedor){
           
            //echo "CPF: ".  $operador->getCPF() . "</br>";
            //echo "Nome: ". $operador->getNome(). "</br>";
            //echo "Cargo: " . $operador->getCargo() . "</br>";
            //echo "Senha: " . $operador->getSenha() . "</br>";

            $con = Conexao::conectar(); 
            $sql = "INSERT INTO fornecedor (CNPJ, Razao Social, Telefone, Cidade) VALUES  ('{$fornecedor->getCNPJ()}', '{$fornecedor->getRazaoSocial()}','{$fornecedor->getTelefone()}', '{$fornecedor -> getCidade()}');";
            $result = $con->query($sql); 
            $con = Conexao::desconectar();
            return $result; 
        }

       
    }

?> 