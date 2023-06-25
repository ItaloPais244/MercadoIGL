<?php
    namespace BLL;
    use DAL\dalTipo;
    include_once "/xampp/htdocs/MercadoIGL/DAL/dalTipo.php";

    class bllTipo{
        public function Select(){
            $dal = new \DAL\dalTipo();


            return $dal->Select();
        }
    }
?>