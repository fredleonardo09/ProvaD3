<?php

    class SuperHeroi{
        private $id;
        private $nome;
        private $poderEspecial;
        private $energia;
        private $forca;
        private $origem;

        public function getid(){
            return $this->id;
        }

        public function getnome(){
            return $this->nome;
        }
        public function getpoderEspecial(){
            return $this->poderEspecial;
        }
        public function getenergia(){
            return $this->energia;
        }
        public function getforca(){
            return $this->forca;
        }
        public function getorigem(){
            return $this->origem;
        }
        public function setid($id){
            $this->id = $id;
        }
        public function setnome($nome){
            $this->nome = $nome;
        }
        public function setpoderEspecial($poderEspecial){
            $this->poderEspecial = $poderEspecial;
        }
        public function setenergia($energia){
            $this->energia = $energia;
        }
        public function setforca($forca){
            $this->forca = $forca;
        }
        public function setorigem($origem){
            $this->origem = $origem;
        }

        public function aumentarEnergia(){
            return $this->$energia*119128620;
        }

        public function calcularPoderMedio($energia, $forca){
            return ($energia*$forca)/2;
        }
    }

    $h1 = new superHeroi(1,"Mulher Maravilha","Rajada Cosmica",7, 7, "Themyscira");
    $h2 = new superHeroi(2,"Magneto","Magnetismo",9, 9, "Alemanha");    
    $h3 = new superHeroi(3,"Harry Potter","Expectro Patronum", 8,8,"Hogwarts");
    $h4 = new superHeroi(4,"Goku","Genki Dama",10,10,"Plante Vegeta");

    

?>