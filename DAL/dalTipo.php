<?php
    namespace DAL;
    include_once 'conexao.php';
    include_once '/xampp/htdocs/MercadoIGL/MODEL/Tipo.php';

    class dalTipo{
        public function Select(){
            $sql = "select * from tipo;";

            $con = Conexao::conectar();
            $result = $con->query($sql);
            $con = Conexao::desconectar();

            //return $result;

            foreach($result as $linha){
                $tipo = new \MODEL\Tipo();
    
                $tipo->setId($linha['id']);
                $tipo->setTipo($linha['tipo']);
    
                $lstTipo[] = $tipo;
            }
            return $lstTipo;
        }

        
        
        public function SelectID(int $id){

        }

        public function Insert(){

        }

        public function Update(){

        }

        public function Delete(){

        }
    }
?>