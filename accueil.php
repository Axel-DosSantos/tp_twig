<?php 
require_once('include/init_twig.php');

$jsonFilePath = __DIR__ . '/json/produits.json';
$jsonData = file_get_contents($jsonFilePath);
$produits = json_decode($jsonData, true);

$twig = init_twig();
$templates = $twig->load('accueil.twig');
echo $templates->render(['produits' => $produits['tshirts']]);
?>
