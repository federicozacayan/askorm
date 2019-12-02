<?php

namespace Askorm;
use PDO;

class PdoMysql
{
    //@todo: refactor to get parameters from  $app['config']['database']
    private $servername = "localhost:3308";
    private $username = "root";
    private $password = "secret";
    private $database = "ac_todos";
    public $pdo;

    public function __construc(){
        $this->run();
    }

    public function run(){
        try {
            $this->pdo = new PDO("mysql:host=$this->servername;dbname=$this->database", $this->username, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            throw new Exception('Error DB', 500);
        }
    }
}
