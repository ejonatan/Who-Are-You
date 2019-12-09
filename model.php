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
        $dataBase = "mysql:dbname=imdb_small;charset=utf8;host=127.0.0.1";
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

    public function getActors($input)
    {
        $statement = $this->DB->prepare("SELECT * FROM Actors WHERE first_name LIKE '%" . $input 
                                        . "%' OR last_name LIKE '%" . $input . "%'");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getMovies($input)
    {
        $statement = $this->DB->prepare("SELECT * FROM Movies WHERE name LIKE '%" . $input . "%'");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function getRoles($first_name, $last_name) {
        $statement = $this->DB->prepare("SELECT Actors.first_name, Actors.last_name, Roles.role FROM Actors " .
                                        "JOIN Roles ON Actors.id = Roles.actor_id " .
                                        "WHERE Actors.first_name = '" . $first_name .
                                        "' AND Actors.last_name = '" . $last_name . "'");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>