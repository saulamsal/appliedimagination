<?php

class config
{
    function __construct()
    {
        $this->host = getenv("HOST");
        $this->user  = getenv("DATABASE");
        $this->pass = getenv("USERNAME");
        $this->db = getenv("PASSWORD");
    }
}
