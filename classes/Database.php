<?php

class Database {
    private $servername = "localhost";
    private $username = "root";
    private $password = "root"; // FOR MAMP, use 'root' as password
    private $dbname = "the_company_2026";
    protected $conn;

    public function __construct()
    {
        $this->conn = new mysqli ($this->servername, $this->username, $this->password, $this->dbname);

        if($this->conn->connect_error){
            die('Error connecting to the database:' . $this->conn->connect_error);
        }
    }
}

?>