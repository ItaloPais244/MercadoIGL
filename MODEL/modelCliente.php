<?php 
namespace MODEL; 

class Cliente {
    private ?int $CPF; 
    private ?string $Nome; 
    private ?int $Endereco;

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
    public function getEndereco(){
        return $this->Endereco; 
    }
    
    public function setEndereco(int $Endereco){
        $this->Endereco = $Endereco; 
    }

}

?>
