<?php
    namespace DAL;
    include_once 'conexao.php';
    include_once 'C:\xampp\htdocs\MercadoIGL\MODEL\Tipo.php';

    class dalTipo{
        public function Select(){
            
            $con = Conexao::conectar();
            $sql = "select * from tipo;";
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
            $sql = "select * from tipo where id=?;";
            $pdo = Conexao::conectar(); 
            $query = $pdo->prepare($sql);
            $query->execute (array($id));
            $linha = $query->fetch(\PDO::FETCH_ASSOC);
            Conexao::desconectar(); 

            $tipo = new \MODEL\Tipo(); 
            $tipo->setId($linha['id']);
            $tipo->setTipo($linha['tipo']); 

            return $tipo; 
        }

        public function Insert(\MODEL\Tipo $tipo){
            $con = Conexao::conectar();
            $sql = "INSERT INTO tipo (tipo) VALUES ('{$tipo->getTipo()}');";
            $result = $con->query($sql);
            $con = Conexao::desconectar();
            return $result;
        }

        public function Update(\MODEL\Tipo $tipo){
            $sql = "UPDATE tipo SET tipo=? WHERE id=?";

            $pdo = Conexao::conectar(); 
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
            $query = $pdo->prepare($sql);
            $result = $query->execute(array($tipo->getTipo(), $tipo->getId()));
            $con = Conexao::desconectar();
            return $result; 
        }

        public function Delete($id){
            $sql = "DELETE FROM tipo WHERE id=?";

            $pdo = Conexao::conectar(); 
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
            $query = $pdo->prepare($sql);
            $result = $query->execute(array($id));
            $con = Conexao::desconectar();
            return $result; 
        }
    }
?>