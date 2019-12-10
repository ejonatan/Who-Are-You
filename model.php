<!--  Authors: Emily Jonatan
               Pranav Talwar
      File: model.php
 -->

<?php

class DatabaseAdaptor
{

    private $DB;

    public function __construct()
    {
        $dataBase = "mysql:dbname=finalproject;charset=utf8;host=127.0.0.1";
        $user = 'root';
        $password = "";
        try {
            $this->DB = new PDO($dataBase, $user, $password);
            $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo ('Error establishing Connection');
            exit();
        }
    }

    public function getUser($un, $pw)
    {
        $statement = $this->DB->prepare("SELECT * FROM users WHERE username = '" . $un 
                                        . "' AND password = '" . $pw . "'");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function getScores($id) {
        $statement = $this->DB->prepare("SELECT scores.clickscore, scores.typescore FROM scores " .
                                        "JOIN users ON scores.id = users.id " .
                                        "WHERE users.id = '" . $id . "'");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>