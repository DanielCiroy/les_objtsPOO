
<?php
class figure{
  public  $longueur=50;
  public  $largeur=5.5;

  public function surface(){
    return $this->longueur*$this->largeur;

  }
}