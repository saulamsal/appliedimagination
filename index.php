<?php

require_once(__DIR__ . '/vendor/autoload.php');
require_once(__DIR__ . '/controller/eventscontroller.php');

$EventsController = new EventsController();


$dotenv =  Dotenv\Dotenv::createUnsafeImmutable(__DIR__);
$dotenv->load();
