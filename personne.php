


<?php

  class personne{
    protected $nom;
    protected $age;


    public function getNom(){
        return $this->nom;
    }

    public function setnom($nom){
        return $this->nom=$nom;
    }

    public function setage($age){
        return $this->age=$age;
    }


    public function getage(){
        return $this->age;
    }

    public function presention(){
        echo"bonjour je suis $this->nom et j'ai $this->age ans";
    }



  }


