<?php
require __DIR__ . '/vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader(__DIR__ . '/templates');
$twig = new Environment($loader);



$adres = [
    'titel' => "POSTADRES \n",
    'straat' => 'Contactweg',
    'huisnummer' => '36',
    'postbus' => '67003',
    'postcode' => '1060 JA',
    'woonplaats' => 'Amsterdam'

];

echo $twig->render('extensie.twig', ['adres' => $adres]);

//echo $twig->render('extensie.twig', ['naam' => 'Uday','beroep' => 'student']);
