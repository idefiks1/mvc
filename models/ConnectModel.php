<?php
    class ConnectModel
    {
        public $db;
        protected $servername = 'localhost';
        protected $dbname = 'vagrant';
        protected $username = 'root';
        protected $password = 'root';
        public function __construct()
        {
            try
            {
                $this->db = new PDO('mysql:host='.$this->servername.';dbname='.$this->dbname, $this->username, $this->password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
                return true;
            }
            catch (PDOException $e) 
            {
                echo $e->getMessage();
            }
        }
    }
?>