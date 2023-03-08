<?php 
    class LIVRES{

        public $nom;
        public $genre;
        public $date;
        public $auteur;

        function __construct(string $nom, string $genre, string $date, string $auteur){
            $this->nom=$nom;
            $this->genre=$genre;    
            $this->date=$date;
            $this->auteur=$auteur;
        }

        public function Livre(){
            echo $this->nom. "<br>";
            echo $this->genre. "<br>";
            echo $this->date. "<br>";
            echo $this->auteur. "<br>";


        }

    }

    