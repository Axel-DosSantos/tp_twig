<?php
require_once('include/init_twig.php');

$jsonFilePath = __DIR__ . '/json/employes.json';

$jsonData = file_get_contents($jsonFilePath);

$employes = json_decode($jsonData, true);

$twig = init_twig();


$templates = $twig->load('contact.twig');
echo $templates->render(['employes' => $employes]);
?>
