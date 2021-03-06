<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/PingPongGenerator.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__ .'/../views'));


    $app->get("/", function() use ($app) {
        return $app['twig']->render('home.twig');
    });
    $app->get("/ping_pong_result", function() use ($app) {



    if(!empty($_GET['number'])){
        $ping_pong_generator = new PingPongGenerator;
        $result = $ping_pong_generator->generatePingPongArray($_GET['number']);

    }
    else{

        $result=array("Error");
    }
        return $app['twig']->render('result.twig' , array ("result"=> $result));
    });
    return $app;
?>
