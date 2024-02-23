<?php

namespace Forum;
class message{
    public $sms="bonjour a tous";
}

namespace Messenger;
class message{
   public $sms="bonjour tout le monde";
}

$Forummessage= new \Forum\message;

$Messengermessage= new \Messenger\message;

var_dump($Forummessage);
var_dump($Messengermessage);