<!--  Authors: Emily Jonatan
               Pranav Talwar
      File: controller.php
 -->
 
<?php

if (isset ( $_POST ['login'] )) {
    if ($myDatabaseFunctions->verified ( $username, $password )) {
        // Store session data so the account name isset and known on any page
        $_SESSION ['user'] = $username;
        // Return to the main page where the user's account name
        // is known and $_SESSION ['user'] is set
        header ( "Location: profile.html" );
    } else {
        $_SESSION ['loginError'] = 'Invalid Account/Password';
        header ( "Location: ./login.php?mode=login" );
    }
}

include 'model.php';

$theDBA = new DatabaseAdaptor();

$input = $_GET ['input'];
$type = $_GET ['type'];

if ($type === "Actors") {
    $arr = $theDBA->getActors($input);
    
    if (count($arr) < 1) {
        echo "No matches for '" . $input . "'";
    }
    
    echo "<table class=\"table\">";
    foreach ($arr as $value) {
        echo "<tr><td>" . $value["first_name"] . " " . $value["last_name"] . "</td></tr>";
    }
    echo "</table>";
    
} else if ($type === "Movies") {
    $arr = $theDBA->getMovies($input);
    
    if (count($arr) < 1) {
        echo "No matches for '" . $input . "'";
    }
    
    echo "<table class=\"table\">";
    foreach ($arr as $value) {
        echo "<tr><td>" . $value["name"] . "</td></tr>";
    }
    echo "</table>";
    
} else if ($type === "Roles") {
    $arr = $theDBA->getRoles($input);
    
    if (count($arr) < 1) {
        echo "No matches for '" . $input . "'";
    }
    
    echo "<table class=\"table\">";
    foreach ($arr as $value) {
        echo "<tr><td>" . $value["role"] . "</td></tr>";
    }
    echo "</table>";
    
}

?>