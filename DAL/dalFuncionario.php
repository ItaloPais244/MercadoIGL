<?php
    namespace DAL; 
    include_once __DIR__. '\conexao.php';
    include_once  'C:\xampp\htdocs\MercadoIGL\MODEL\modelFuncionario.php';

   // include_once '../../servicos/DAL/conexao.php';
  //  include_once '../MODEL/Area.php';

    class dalFuncionario{

        public function Select(){
          $sql = "select * from funcionario;";

          $con = Conexao::conectar(); 
          $result = $con->query($sql); 
          $con = Conexao::desconectar();
          
          //echo count ($result);
          
           //$lstAreas[] = new \MODEL\Area(); 
          foreach($result as $linha){
                        
            $funcionario = new \MODEL\Funcionario();
            
            $funcionario->setCPF($linha['CPF']);
            $funcionario->setNome($linha['Nome']);  
            $funcionario->setCargo($linha['Cargo']);      
            $funcionario->setSenha($linha['Senha']); 
    
            $lstCargo[] = $funcionario; 

          }
                   
          return  $lstCargo;
        }


        public function Insert(\MODEL\Funcionario $funcionario){
           
            //echo "CPF: ".  $operador->getCPF() . "</br>";
            //echo "Nome: ". $operador->getNome(). "</br>";
            //echo "Cargo: " . $operador->getCargo() . "</br>";
            //echo "Senha: " . $operador->getSenha() . "</br>";

            $con = Conexao::conectar(); 
            $sql = "INSERT INTO funcionario (CPF, nome, cargo, senha) VALUES  ('{$funcionario->getCPF()}', '{$funcionario->getNome()}','{$funcionario->getCargo()}', '{$funcionario -> getSenha()}');";
            $result = $con->query($sql); 
            $con = Conexao::desconectar();
            return $result; 
        }

       
    }

?> 