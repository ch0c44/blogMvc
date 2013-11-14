<?php 

$loader = new Twig_Loader_Filesystem(APP . 'view/');
$twig = new Twig_Environment($loader, array(
    'cache' => WEBROOT . 'cache/',
));

$twig->addGlobal('CSS', WEBROOT .'css/');
$twig->addGlobal('JS', WEBROOT .'js/');
$twig->addGlobal('IMG', WEBROOT .'img/');

$twig->clearCacheFiles();