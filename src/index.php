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
//********************** template method *******************
//$beachJourney = new \App\Behavioral\TemplateMethod\BeachJourney();
//$beachJourney->takeATrip();
//var_dump($beachJourney->getThingsToDo());
//******************** Fluent interface ******************
//$query = new \App\Structural\FluentInterface\QueryBuilder();
//var_dump($query->table('users')->select('name','id')
//    ->where('age', '>', 18)
//    ->where('country', '=', 'USA')
//    ->getQuery()
//);
//******************** Strategy Pattern ******************
//$md5 = new \App\Behavioral\Strategy\Md5Encrypt();
//$hash = new \App\Behavioral\Strategy\HashEncrypt();
//$encrypt = new \App\Behavioral\Strategy\EncryptContext($md5);
//var_dump($encrypt->encryptString('amer'));
//$encrypt->setEncryptStrategy($hash);
//var_dump($encrypt->encryptString('amer'));
//************** Facade Pattern **************
//$onlineShopping = new \App\Structural\Facade\OnlineShoppingFacade();
//$result = $onlineShopping->buyProduct('Smartphone', 500);
//if ($result) {
//    echo "Purchase successful!";
//} else {
//    echo "Product out of stock.";
//}
//******************** Adapter Pattern ****************
//$email  = new \App\Structural\Adapter\EmailNotification();
//$twitter  = new \App\Structural\Adapter\TwitterAdapter();
//$send = new \App\Structural\Adapter\NotificationManager($twitter);
//var_dump($send->sendNotification('01112795101'));
//******************* mediator *******************
//$bookingSystem = new \App\Behavioral\Mediator\FlightBookingSystem();
//$airline1 = new \App\Behavioral\Mediator\Airline("Airline A", ["FLIGHT101", "FLIGHT102"]);
//$airline2 = new \App\Behavioral\Mediator\Airline("Airline B", ["FLIGHT201", "FLIGHT202"]);
//$bookingSystem->registerAirline($airline1);
//$bookingSystem->registerAirline($airline2);
//$travelAgency = new \App\Behavioral\Mediator\TravelAgency("Travel Express", $bookingSystem);
//$passengerName = "amer";
//$flightCode = "FLIGHT203";
//var_dump($travelAgency->bookFlightForPassenger($flightCode, $passengerName));
//************** Observe ***********
//$res = new \App\Behavioral\Observer\Restaurant();
//$kitchen = new \App\Behavioral\Observer\Kitchen();
//$res->attach($kitchen);
//$res->setInfoOrder(10,['water','fish']);
//var_dump($kitchen->getInfoOrder());
//************** State *************
//$orderContext = new \App\Behavioral\State\Order();
//var_dump($orderContext->orderProceed());
//var_dump($orderContext);
//************* memento ***********
//$textEditor = new \App\Behavioral\Memento\Editor();
//$history = new \App\Behavioral\Memento\History($textEditor);
//$textEditor->type("Hello, ");
//$history->backup();
//$textEditor->type("world!");
//$history->undo();
//var_dump($textEditor->getContent());
//*************** builder ****************
//$builder = new \App\Creational\Builder\ComputerSystemBuilder();
//$computer = $builder->setCPU('core I5')
//            ->setRAM('32GB')
//            ->setStorage('SSD', '1TB')
//            ->addPeripheral('Monitor')
//            ->addPeripheral('Keyboard')
//            ->addPeripheral('Mouse')
//            ->build();
//******************* prototype ***********
//$task1 = new \App\Creational\Prototype\Task("Complete project",
//    "Finish the important project milestones",
//    new DateTime('2020-09-15'));
//$task2 = clone $task1;
//var_dump($task1->getInfo());
//var_dump($task2->getInfo());
//***************** data mapper ***************
//$sql = new \App\Structural\DataMapper\SqlManager();
//$user_mapper = new \App\Structural\DataMapper\UserMapper($sql);
//$user = $user_mapper->findById(1);
//var_dump($user->email);
//**************** composite **************
//$address = new \App\Structural\Composite\AddressDTO('qena',166);
//$address2 = new \App\Structural\Composite\AddressDTO('egypt',8986565);
//$owner = new \App\Structural\Composite\OrderOwnerDTO($address,'amer mohamed');
//$owner2 = new \App\Structural\Composite\OrderOwnerDTO($address2,'moustafa saad');
//$order = new \App\Structural\Composite\OrderDTO($owner,100,2);
//$order2 = new \App\Structural\Composite\OrderDTO($owner2,200,3);
//$bill = new \App\Structural\Composite\Bill();
//$bill->addOrder($order);
//$bill->addOrder($order2);
//echo $bill;

