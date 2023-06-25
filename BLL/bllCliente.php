<?php
    namespace BLL; 
    use DAL\dalCliente; 
    include_once '../../DAL/dalCliente.php';
    
    class bllCliente {
        public function Select (){
            $dal = new  \Dal\dalCliente(); 
            //linhas de código com regras de negócio
           
            return $dal->Select();
        }

        public function SelectCPF (int $CPF){
            $dal = new  \Dal\dalCliente(); 
            //linhas de código com regras de negócio
           
            return $dal->Select($CPF);
        }

        public function SelectNome(string $Nome){
            $daloperador = new dalCliente(); 
            return $daloperador->Select($Nome);
        }

        public function SelectEndereco(string $Endereco){
            $daloperador = new dalCliente(); 
            return $daloperador->Select($Endereco);
        }

        public function Insert (\MODEL\Funcionario $funcionario){
           
            //echo "Nome: {$operador->getNome()} </br>"; 
            //echo "Aniversario: {$operador->getAniversario()} </br>"; 
            // echo "Salario: {$operador->getSalario()} </br>"; 

            // regras de negócios devem ser implementadas neste local.

           $dal = new \DAL\dalFuncionario(); 

           $dal->Insert($funcionario);
          
        }

        public function Update (\MODEL\Funcionario $funcionario){

           // regras de negócios devem ser implementadas neste local.

           $dal = new \DAL\dalFuncionario(); 

           $dal->Update($funcionario);
          
        }

        public function Delete (int $CPF){

            // regras de negócios devem ser implementadas neste local.
 
            $dal = new \DAL\dalFuncionario(); 
 
            $dal->Delete($CPF);
           
         }

    }
?>