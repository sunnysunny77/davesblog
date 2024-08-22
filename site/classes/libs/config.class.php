<?php
/**
 * Config Return a connection to the mysql database
 * 
 * @author Daniel Costello
 * @property private $host Hostname of database
 * @property private $dbname Name of database
 * @property private $user User name of database
 * @property private $pass Password of database
 *
 */
class Config
{
    
    private $host = "localhost";
    private $dbname = "databasedb";
    private $user = "root";
    private $pass = "password";

    protected function Connect()
    {

        $pdo = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbname, $this->user, $this->pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->exec('SET NAMES "utf8"');

        return $pdo;
    }
}
