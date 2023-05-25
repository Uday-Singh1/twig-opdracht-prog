<?php
require __DIR__ . '/vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader(__DIR__ . '/templates');
$twig = new Environment($loader);



$users = [
    'usernameU' => "Uday \n",
    'usernameN' => "Neo \n",
    'usernameNa' => "Nabil \n"

];

echo $twig->render('loopen.twig', ['users' => $users]);

//echo $twig->render('extensie.twig', ['naam' => 'Uday','beroep' => 'student']);
