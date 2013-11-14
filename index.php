<?php 

define('ROOT', __DIR__);
define('APP', __DIR__ . '/app/');
define('WEBROOT', __DIR__ . '/app/webroot/');
define('CONF', __DIR__ . '/app/webroot/config/');
define('ROUTE', __DIR__ . 'app/route/');

require ROOT . '/vendor/autoload.php';

use RedBean_Facade as R;

R::setup('mysql:host=localhost;dbname=blog', 'root','azeqsd'); 

include CONF . 'twig.php';

$app = new \Slim\Slim();

$app->get('/', function () use ($app, $twig)
{
	echo $twig->render('layout/main.html.twig');
});

$app->run();