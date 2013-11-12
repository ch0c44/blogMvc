<?php 

$loader = new Twig_Loader_Filesystem(APP . 'view/');
$twig = new Twig_Environment($loader, array(
    'cache' => WEBROOT . 'cache/',
));