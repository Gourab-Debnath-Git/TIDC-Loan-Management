<?php
class Database{
    private $dbserver = "localhost";
    private $dbuser = "root";
    private $dbpassword = "";
    private $dbname = "tidc_loan_db";
    protected $conn;

    public function __construct() {

        try {
            $dsn = "mysql:host={$this->dbserver}; dbname={$this->dbname}; charset=utf8";
            $option = array(PDO::ATTR_PERSISTENT);
            $this->conn = new PDO($dsn, $this->dbuser,$this->dbpassword,$option);
        } catch (PDOException $e) {
            echo "Connection Error".$e->getMessage();
        }


    }
}

?>