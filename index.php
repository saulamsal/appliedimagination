<?php

session_unset();
require_once(__DIR__ . '/vendor/autoload.php');
require_once(__DIR__ . '/controller/eventscontroller.php');

$EventsController = new EventsController();
$EventsController->requestHandler();

$dotenv =  Dotenv\Dotenv::createUnsafeImmutable(__DIR__);
$dotenv->load();
