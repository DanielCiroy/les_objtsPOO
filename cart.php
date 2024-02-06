
<?php
class personnage{
   public $nom;
   public $vie=80;
   public $atk=20;
   public $age;

  public function regenerer(){
    $this->vie=100;
  }

  public function __construct($nom){
    $this->nom=$nom;
  }


}



