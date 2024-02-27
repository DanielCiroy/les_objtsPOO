<?php

namespace Forum;
class message{
 public $msg='vous etes dans forum';
}

namespace Messenger;
class message{
public $msg='vous etes dans messenger';
}

$ForumMessage=new \Forum\message;

$MessengerMessage= new \Messenger\message;

var_dump($ForumMessage);
var_dump($MessengerMessage);

$date= new \DateTime();