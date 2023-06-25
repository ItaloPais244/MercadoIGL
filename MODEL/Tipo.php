<?php
    namespace MODEL;

    class Tipo{
        private ?int $id;
        private ?string $tipo;

        public function __construct(){
            
        }

        public function getId(){
            return $this->id;
        }

        public function setId(int $id){
            $this->id = $id;
        }

        public function getTipo(){
            return $this->tipo;
        }

        public function setTipo(string $tipo){
            $this->tipo = $tipo;
        }
    }
?>