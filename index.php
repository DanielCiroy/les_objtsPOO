

<?php


 require('figure.php');
 require('figure2.php');
 
 

 $carre= new figure();
  $carre->longueur=100;
  $carre->largeur=100;
 $carre->surface(100,100);

 var_dump($carre->surface());

 
 