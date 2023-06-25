<?php
    namespace BLL; 
    use DAL\dalFornecedor; 
    include_once '../../DAL/dalFornecedor.php';
    
    class bllFornecedor {
        public function Select (){
            $dal = new  \Dal\dalFornecedor(); 
            //linhas de código com regras de negócio
           
            return $dal->Select();
        }

        public function SelectCNPJ (int $CNPJ){
            $dal = new  \Dal\dalFornecedor(); 
            //linhas de código com regras de negócio
           
            return $dal->Select($CNPJ);
        }

        public function SelectRazaoSocial(string $RazaoSocial){
            $dalFornecedor = new dalFornecedor(); 
            return $dalFornecedor->Select($RazaoSocial);
        }

        public function SelectTelefone(string $Telefone){
            $dalFornecedor = new dalFornecedor(); 
            return $dalFornecedor->Select($Telefone);
        }

        public function SelectCidade(string $Cidade){
            $dalFornecedor = new dalFornecedor(); 
            return $dalFornecedor->Select($Cidade);
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