<?php
$simplexml = new SimpleXMLElement(
        '<?xml version="1.0"?><concerts/>');

$concert1 = $simplexml->addChild('concert');
$concert1->addChild("title", "Czarodziejski flet");
$concert1->addChild("time", 1223123123);

$concert1->addChild('concert')->addChild('concert2')->addChild('concert3');

$concert2 = $simplexml->addChild('concert');
$concert2->addChild("title", "Cztery pory roku");
$concert2->addChild("time", 99999999);

echo $simplexml->asXML();