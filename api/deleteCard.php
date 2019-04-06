<?php
header('Content-Type: application/json');
require_once "bootstrap.php";

$card = $entityManager->find('monopolyeventcards\ORM\Karte', $_GET['id']);

if ($card === null) {
    echo '{"status": "failed"}';
    exit(1);
}
$entityManager->remove($card);
$entityManager->flush();
echo '{"status": "success"}';

