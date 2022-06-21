<?php
class Connection{

    protected $urldb, $dbname, $usernamedb, $passworddb;

    public function __construct(){
        $this->urldb = "192.185.176.121";
        $this->dbname = "veloxs73_jobshub";
        $this->usernamedb = "veloxs73_geral";
        $this->passworddb = "Gustavo46724346#";
    }

    public function connection(){
        $conn = new PDO("mysql:host=$this->urldb;dbname=$this->dbname", $this->usernamedb, $this->passworddb);
        return $conn;
    }
 }