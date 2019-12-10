<?php
class DatabaseAdaptor {
    private $DB;
    public function __construct() {
        $dataBase = "mysql:dbname=imdb_small;charset=utf8;host=127.0.0.1";
        $user = 'root';
        $password = "";
        try {
            $this->DB = new PDO ($dataBase, $user, $password);
            $this->DB->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo ('Error establishing Connection');
            exit();
        }
    }
    
    public function getID($input) {
        $statement = $this->DB->prepare("SELECT * FROM Users WHERE first_name LIKE '%" . $input . "%' OR last_name LIKE '%" . $input . "%'");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function getUsername($input) {
        $statement = $this->DB->prepare("SELECT * FROM Users WHERE first_name LIKE '%" . $input . "%' OR last_name LIKE '%" . $input . "%'");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function getPassword($input) {
        $statement = $this->DB->prepare("SELECT * FROM Movies WHERE name LIKE '%" . $input . "%'");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function getFirstName($input) {
        $statement = $this->DB->prepare("SELECT * FROM Actors WHERE first_name LIKE '%" . $input . "%' OR last_name LIKE '%" . $input . "%'");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function getLastName($input) {
        $statement = $this->DB->prepare("SELECT * FROM Actors WHERE first_name LIKE '%" . $input . "%' OR last_name LIKE '%" . $input . "%'");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
   
}

$theDBA = new DatabaseAdaptor ();
$arr = $theDBA->getRoles ('Kevin', 'Bacon');
print_r ($arr);

?>