<?php
    namespace MODEL;

    class Fornecedor{
        private ?int $id;
        private ?int $cnpj;
        private ?string $razao;
        private ?int $telefone;
        private ?string $cidade;

        public function __construct(){
            
        }

        public function getId(){
            return $this->id;
        }

        public function setId(int $id){
            $this->id = $id;
        }

        public function getCnpj(){
            return $this->cnpj;
        }

        public function setCnpj(int $cnpj){
            $this->cnpj = $cnpj;
        }

        public function getRazao(){
            return $this->razao;
        }

        public function setRazao(string $razao){
            $this->razao = $razao;
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

        public function setCidade(string $cidade){
            $this->cidade = $cidade;
        }
    }
?>