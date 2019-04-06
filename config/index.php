<?php
namespace monopolyeventcards\config;
use monopolyeventcards\config;

require_once "vendor/autoload.php";
include_once "../api/getAllCards.php";

$view = new \TYPO3Fluid\Fluid\View\TemplateView();
$paths = $view->getTemplatePaths();

$view->assignMultiple([
    'karten' => $cards
]);

$paths->setTemplatePathAndFilename(__DIR__ . '/Template/index.html');

$output = $view->render();
echo $output;
?>
