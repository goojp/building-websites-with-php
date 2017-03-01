<?php
require 'vendor/autoload.php';

date_default_timezone_set('Asia/Shanghai');

// use Monolog\Logger;
// use Monolog\Handler\StreamHandler;

// $log = new Logger('name');
// $log->pushHandler(new StreamHandler('app.txt', Monolog\Logger::WARNING));
// $log->addWarning('Foo');
// $log->addWarning('Hello');



$app = new Slim\Slim( array(
    'view' => new \Slim\Views\Twig()
    ));

$view = $app->view();

$view->parserOptions = array('debug' => true);
$view->parserExtensions = array(
    new \Slim\Views\TwigExtension(),
    );

$app->get('/', function () use($app) {
    $app->render('about.twig');
    
})->name('home');
 
$app->get('/contact', function () use($app) {
   $app->render('contact.twig');
})->name('contact');

$app->post('/contact', function () use($app) {
   var_dump($app->request->post());
});


$app->run();