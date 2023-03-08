<?php 
    class UTILISATEURS{

        public $nom;
        public $genre;
        public $date;
        

        function __construct(string $nom, string $genre, string $date){
            $this->nom=$nom;
            $this->genre=$genre;    
            $this->date=$date;
         
        }

        public function Utilisateurs(){
            echo $this->nom. "<br>";
            echo $this->genre. "<br>";
            echo $this->date. "<br>";
          


        }

    }
