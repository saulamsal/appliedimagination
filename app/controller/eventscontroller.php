<?php
require './app/model/eventsModel.php';
require_once 'config.php';

session_status() === PHP_SESSION_ACTIVE ? TRUE : session_start();

class EventsController
{

    function __construct()
    {
        $this->objconfig = new config();
        $this->objsm =  new eventsModel($this->objconfig);
    }

    public function requestHandler()
    {
        $this->home();
    }



    public function home()
    {
        $result = $this->objsm->selectRecord(0);
        include "view/home.php";
    }

    // public function filteredData()
    // {

    // }
}
