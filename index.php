<?php
 require_once('cart.php');
 
 $merlin = new personnage("merlin");
 $merlin->age=52;
 $merlin -> regenerer();

 $merlin-> atk=100;
 

 var_dump($merlin);


 $harry= new personnage("harry");
 $harry->regenerer();
 $harry-> age=25;

 var_dump($harry);

 




