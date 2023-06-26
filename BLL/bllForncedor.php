<?php
    namespace BLL;
    use DAL\dalFornecedor;
    include_once "C:/xampp/htdocs/MercadoIGL/DAL/dalFornecedor.php";

    class bllFornecedor{
        public function Select(){
            $dal = new \DAL\dalFornecedor();


            return $dal->Select();
        }

        public function SelectID (int $id){
            $dal = new  \DAL\dalFornecedor(); 


            return $dal->SelectID($id);
        }

        public function Insert(\MODEL\Fornecedor $fornecedor){
            $dal = new \DAL\dalFornecedor();
    
            $dal->Insert($fornecedor);
        }

        public function Update (\MODEL\Fornecedor $fornecedor){

            // regras de negócios devem ser implementadas neste local.
 
            $dal = new \DAL\dalFornecedor(); 
 
            $dal->Update($fornecedor);
        }

        public function Delete (int $id){

            // regras de negócios devem ser implementadas neste local.
 
            $dal = new \DAL\dalFornecedor(); 
 
            $dal->Delete($id);
        }
    }
?>