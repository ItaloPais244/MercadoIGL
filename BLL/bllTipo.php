<?php
    namespace BLL;
    use DAL\dalTipo;
    include_once "C:/xampp/htdocs/MercadoIGL/DAL/dalTipo.php";

    class bllTipo{
        public function Select(){
            $dal = new \DAL\dalTipo();


            return $dal->Select();
        }

        public function SelectID (int $id){
            $dal = new  \DAL\dalTipo(); 


            return $dal->SelectID($id);
        }

        public function Insert(\MODEL\Tipo $tipo){
            $dal = new \DAL\dalTipo();
    
            $dal->Insert($tipo);
        }

        public function Update (\MODEL\Tipo $tipo){

            // regras de negócios devem ser implementadas neste local.
 
            $dal = new \DAL\dalTipo(); 
 
            $dal->Update($tipo);
        }

        public function Delete (int $id){

            // regras de negócios devem ser implementadas neste local.
 
            $dal = new \DAL\dalTipo(); 
 
            $dal->Delete($id);
        }
    }
?>