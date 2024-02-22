

<?php

require('personne.php');
require('personnage.php');


$personne1= new personne();
$personne1->setnom('daniel');
$personne1->setage(30);

$personne2= new personnage();

$personne2->setNom('djidji');
$personne2->setage(23);
$personne2->adress='ngagara';





var_dump($personne1->presention());
var_dump($personne2->presention(), $personne2->adress);




 

 

 

 
 