<?php
header("Content-Type: application/json");
require_once "bootstrap.php";

$cards = $entityManager->getRepository('monopolyeventcards\ORM\Karte')->findAll();
shuffle($cards);
$card = $cards[0];

if(isset($_GET['id']) && $card->getId() == $_GET['id'] && sizeof($cards) > 1)
    $card = $cards[1];

if ($card === null) {
    echo '{"description": "Error"}';
    exit(1);
}

echo '{"description": "'.$card->getDescription().'", "id": '.$card->getId().'}';
