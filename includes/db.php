<?php

class DB{

    private $servidor;
    private $dbname;
    private $username;
    private $password;
    private $charset;

    public function __construct(){
        $this->servidor ='localhost';
        $this->dbname ='supermesolumdeus';
        $this->username ='root';
        $this->password ="";
        $this->charset = 'utf8';
    }

    public function connect(){
        try {
            $connection = "mysql:host=" . $this->servidor . ";dbname=" . $this->dbname . ";charset=" . $this->charset;
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
            $pdo = new PDO($connection, $this->username, $this->password, $options);
    
            return $pdo;

        } catch(PDOException $e){
            print_r('Error connection: ' . $e->getMessage());
        }
    }
}

?>