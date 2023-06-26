<?php 
namespace MODEL; 

class Funcionario {
    private ?int $CPF; 
    private ?string $Nome; 
    private ?int $Cargo;
    private ?int $senha;  

    public function __construct(){ }
    
   
    public function getCPF(){
        return $this->CPF; 
    }
    
    public function setCPF(int $CPF){
        $this->CPF = $CPF; 
    }


    public function getNome(){
        return $this->Nome; 
    }
    
    public function setNome(string $Nome){
        $this->Nome = $Nome; 
    }
    public function getCargo(){
        return $this->Cargo; 
    }
    
    public function setCargo(int $Cargo){
        $this->Cargo = $Cargo; 
    }
        
    public function getSenha(){
        return $this->senha;  
    }
    
    public function setSenha(float $senha){
        $this->senha = $senha; 
    }

}

?>
