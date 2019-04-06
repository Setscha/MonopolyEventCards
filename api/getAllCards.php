<?php
require_once "bootstrap.php";

$cards = $entityManager->getRepository('monopolyeventcards\ORM\Karte')->findAll();

if ($cards === null) {
    $cards = array();
}

