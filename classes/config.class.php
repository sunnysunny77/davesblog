<?php
/**
 * Config Return a connection to the mysql database and sets the environemnt config
 *
 * @author Daniel Costello
 * @property private $host Hostname of database
 * @property private $dbname Name of database
 * @property private $user User name of database
 * @property private $pass Password of database
 * @property private $timeZone Holds the timezone for date
 *
 */
class Config
{

    private $host = "localhost";
    private $dbname = "databasedb";
    private $user = "root";
    private $pass = "";
    private $timeZone = "Australia/Perth";

    public function __construct()
    {
        
        date_default_timezone_set($this->timeZone);
    }

    protected function Connect()
    {

        try {

            $pdo = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbname, $this->user, $this->pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->exec('SET NAMES "utf8"');
        } catch (PDOException $e) {

            echo $e->getMessage();
            exit();
        }

        return $pdo;
    }
}
