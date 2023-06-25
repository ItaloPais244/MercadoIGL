<?php 
namespace MODEL; 

class Fornecedor {
    private ?int $CNPJ; 
    private ?string $RazaoSocial; 
    private ?int $telefone; 
    private ?string $cidade; 

    public function __construct(){ }
    
   
    public function getCNPJ(){
        return $this->CNPJ; 
    }
    
    public function setCNPJ(int $CNPJ){
        $this->CNPJ = $CNPJ; 
    }


    public function getRazaoSocial(){
        return $this->RazaoSocial; 
    }
    
    public function setRazaoSocial(string $RazaoSocial){
        $this->RazaoSocial = $RazaoSocial; 
    }
    public function getTelefone(){
        return $this->telefone; 
    }
    
    public function setTelefone(int $telefone){
        $this->telefone = $telefone; 
    }
        
    public function getCidade(){
        return $this->cidade;  
    }
    
    public function setCidade(float $cidade){
        $this->cidade = $cidade; 
    }

}

?>
