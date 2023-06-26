<?php
    namespace BLL; 
    use DAL\dalFuncionario; 
    include_once '../../DAL/dalFuncionario.php';
    
    class bllFuncionario {
        public function Select (){
            $dal = new  \Dal\dalFuncionario(); 
            //linhas de código com regras de negócio
           
            return $dal->Select();
        }

        public function SelectCPF (int $CPF){
            $dal = new  \Dal\dalFuncionario(); 
            //linhas de código com regras de negócio
           
            return $dal->Select($CPF);
        }

        public function SelectNome(string $Nome){
            $dalFuncionario = new dalFuncionario(); 
            return $dalFuncionario->Select($Nome);
        }

        public function SelectCargo(string $Cargo){
            $dalFuncionario = new dalFuncionario(); 
            return $dalFuncionario->Select($Cargo);
        }

        public function SelectSenha(string $Senha){
            $dalfuncionario = new dalFuncionario(); 
            return $dalfuncionario->Select($Senha);
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