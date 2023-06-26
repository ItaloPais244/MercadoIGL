<?php
    namespace DAL;
    include_once 'conexao.php';
    include_once 'C:\xampp\htdocs\MercadoIGL\MODEL\Fornecedor.php';

    class dalFornecedor{
        public function Select(){
            
            $con = Conexao::conectar();
            $sql = "select * from fornecedor;";
            $result = $con->query($sql);
            $con = Conexao::desconectar();

            //return $result;

            foreach($result as $linha){
                $fornecedor = new \MODEL\Fornecedor();
    
                $fornecedor->setId($linha['id']);
                $fornecedor->setCnpj($linha['cnpj']);
                $fornecedor->setRazao($linha['razao']);
                $fornecedor->setTelefone($linha['telefone']);
                $fornecedor->setCidade($linha['cidade']);
    
                $lstFornecedor[] = $fornecedor;
            }
            return $lstFornecedor;
        }


        public function SelectID(int $id){
            $sql = "select * from fornecedor where id=?;";
            $pdo = Conexao::conectar(); 
            $query = $pdo->prepare($sql);
            $query->execute (array($id));
            $linha = $query->fetch(\PDO::FETCH_ASSOC);
            Conexao::desconectar(); 

            $fornecedor = new \MODEL\Fornecedor(); 
            $fornecedor->setId($linha['id']);
            $fornecedor->setCnpj($linha['cnpj']);
            $fornecedor->setRazao($linha['razao']);
            $fornecedor->setTelefone($linha['telefone']);
            $fornecedor->setCidade($linha['cidade']);

            return $fornecedor; 
        }

        public function Insert(\MODEL\Fornecedor $fornecedor){
            $con = Conexao::conectar();
            $sql = "INSERT INTO fornecedor (cnpj, razao, telefone, cidade) 
                    VALUES ('{$fornecedor->getCnpj()}', 
                            '{$fornecedor->getRazao()}', 
                            '{$fornecedor->getTelefone()}',
                            '{$fornecedor->getCidade()}');";
            $result = $con->query($sql);
            $con = Conexao::desconectar();
            return $result;
        }

        public function Update(\MODEL\Fornecedor $fornecedor){
            $sql = "UPDATE fornecedor SET cnpj=?, razao=?, telefone=?, cidade=? WHERE id=?";

            $pdo = Conexao::conectar(); 
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
            $query = $pdo->prepare($sql);
            $result = $query->execute(array($fornecedor->getCnpj(), $fornecedor->getRazao(), $fornecedor->getTelefone(), $fornecedor->getCidade(), $fornecedor->getID()));
            $con = Conexao::desconectar();
            return $result; 
        }

        public function Delete($id){
            $sql = "DELETE FROM fornecedor WHERE id=?";

            $pdo = Conexao::conectar(); 
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
            $query = $pdo->prepare($sql);
            $result = $query->execute(array($id));
            $con = Conexao::desconectar();
            return $result; 
        }
    }
?>