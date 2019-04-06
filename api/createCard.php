<?php 
require_once "bootstrap.php";

if(isset($argv[1]))
    $cardDesc = $argv[1];
else
    $cardDesc = $_POST["description"];

$card = new \monopolyeventcards\ORM\Karte();
$card->setDescription($cardDesc);

$entityManager->persist($card);
$entityManager->flush();

echo $card->getId();
