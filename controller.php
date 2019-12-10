<?php
session_start();
?>

<!--  Authors: Emily Jonatan
               Pranav Talwar
      File: controller.php
 -->
 
<?php

include 'model.php';

$theDBA = new DatabaseAdaptor();

if (isset($_GET ['mode'])) {
    
    
    
} else {
    
    $un = $_GET ['username'];
    $pw = $_GET ['password'];
    
    if ($theDBA->getUser($un, $pw)) {
        $arr = $theDBA->getUser($un, $pw)[0];
              
        $_SESSION ['id'] = $arr['ID'];
        $_SESSION ['user'] = $arr['username'];
        $_SESSION ['pass'] = $arr['password'];
        $_SESSION ['fname'] = $arr['firstname'];
        $_SESSION ['lname'] = $arr['lastname'];
        $_SESSION ['age'] = $arr['age'];
        
        $arr = $theDBA->getScores($_SESSION ['id'])[0];
                
        $_SESSION ['clickscore'] = $arr['clickscore'];
        $_SESSION ['typescore'] = $arr['typescore'];
        
        print_r($_SESSION);
                
        header ( "Location: profile.php" );
    } else {
        echo "Invalid Account/Password";
        $_SESSION ['loginError'] = 'Invalid Account/Password';
        header ( "Location: ./login.php?mode=login" );
    }
}

?>