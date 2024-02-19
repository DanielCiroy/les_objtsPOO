
<?php
class figure{
  protected  $longueur=50;
  protected  $largeur=5.5;

  protected function surface(){
    return $this->longueur*$this->largeur;

  }
}