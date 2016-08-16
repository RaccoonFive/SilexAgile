<?php
  require_once "vendor/autoload.php";

  $app = new Silex\Application();
  $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/views',
  ));

  $app->get('/', function () use ($app) {
    return $app['twig']->render('index.twig', array());
  });

  $app->run();
?>
