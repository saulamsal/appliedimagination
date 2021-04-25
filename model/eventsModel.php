<?php

class eventsModel
{
    // set database config for mysql
    function __construct($connectionSetup)
    {
        $this->host = $connectionSetup->host;
        $this->user = $connectionSetup->user;
        $this->pass =  $connectionSetup->pass;
        $this->db = $connectionSetup->db;
    }
    // open mysql data base
    public function open_db()
    {
        $this->condb = new mysqli($this->host, $this->user, $this->pass, $this->db);
        if ($this->condb->connect_error) {
            die("Erron in connection: " . $this->condb->connect_error);
        }
    }
    // close database
    public function close_db()
    {
        $this->condb->close();
    }


    // select record     
    public function selectRecord()
    {
        try {
            $this->open_db();

            $query = $this->condb->prepare("SELECT * FROM events");

            $query->execute();
            $res = $query->get_result();
            $query->close();
            $this->close_db();
            return $res;
        } catch (Exception $e) {
            $this->close_db();
            throw $e;
        }
    }
}
