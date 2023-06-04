<?php

use App\Creational\AbstractFactory\Application;
use App\Creational\AbstractFactory\MacFactory\MacFactory;
use App\Creational\AbstractFactory\WinFactory\WinFactory;
use App\Creational\FactoryMethod\SystemDialog;
use App\Creational\FactoryMethod\WebDialog;
use App\Creational\Singleton\Singleton;
use App\Structural\Decorator\ExtraBed;

require_once __DIR__ . "/../vendor/autoload.php";

// Abstract Factory
//$winFactory = new WinFactory();
//$macFactory = new MacFactory();
//$app = new Application($macFactory);
//return ($app->createUi());
//***************************************
// singleton
//$s1 = Singleton::getInstance();
//$s2 = Singleton::getInstance();
//var_dump($s1,$s2);
//******************************************
//factory method
//$systemDialog= new SystemDialog();
//var_dump($systemDialog->renderDialog());
//$webDialog= new WebDialog();
//var_dump($webDialog->renderDialog());
//***************************************
// Decorator Pattern
//$double_room = new \App\Structural\Decorator\DoubleRoom();
//$double_room_bed = new ExtraBed($double_room);
//$double_room_bed = new ExtraBed($double_room);
//$wifi = new \App\Structural\Decorator\Wifi($double_room);
//$wifiAndBed = new \App\Structural\Decorator\Wifi($double_room_bed);
//var_dump($double_room->price(),$double_room->getDescription());
//var_dump($double_room_bed->price(),$double_room_bed->getDescription());
//var_dump($wifi->price(),$wifi->getDescription());
//var_dump($wifiAndBed->price(),$wifiAndBed->getDescription());
//*****************************************************************
//bridge pattern
//$gardeOne = new \App\Structural\Bridge\GradeOne();
//$gardeTwo = new \App\Structural\Bridge\GradeTwo(new \App\Structural\Bridge\XmlReport());
//var_dump($gardeOne->showReport());
//$gardeOne->setReport(new \App\Structural\Bridge\XmlReport());
//var_dump($gardeOne->showReport());
//var_dump($gardeTwo->showReport());
//********************************************************************
// chain of responsibility
//$handler1 = new \App\Behavioral\ChainOfResponsibility\ConcreteHandler1();
//$handler2 = new \App\Behavioral\ChainOfResponsibility\ConcreteHandler2();
//$handler3 = new \App\Behavioral\ChainOfResponsibility\ConcreteHandler3();
//$handler1->setNext($handler2)->setNext($handler3);
//var_dump($handler1->handle('request3'));
//**********************************************************************
//$middlewareChain = new \App\Behavioral\ChainOfResponsibility\Middleware\Middleware();
//$middlewareChain->add(new \App\Behavioral\ChainOfResponsibility\Middleware\AuthenticateMiddleware());
//$middlewareChain->add(new \App\Behavioral\ChainOfResponsibility\Middleware\VerifyCsrfTokenMiddleware());
//$request  = new stdClass;
//$request->name = "amer";
//$request->age = 30;

//$response = $middlewareChain->handle($request, function ($request) {
//    return 'amer';
//});
//var_dump($response);

