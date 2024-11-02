<?php 

class Connection {

    private $host = "localhost";
    private $dbname = "db_bigvacation_lock";
    private $userdb = "root";
    private $password = "";


    public function Connect(){

        try {
            $connection = new PDO(

                "mysql:host=$this->host;
                       dbname=$this->dbname", 
                       "$this->userdb", 
                       "$this->password",
                       [
                           PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
                           PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                           PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                       ]

            );
            return $connection;
            
        } 
        catch (PDOException $e){

            echo '<p>' .$e->getMessage() . ' </p>';
            
        }

        
    }
}