<?php
    
    $serverName = 'localhost';
    $userName = 'root';
    $password = '';
    $dbName = 'test';

    $conn = mysqli_connect($serverName, $userName, $password, $dbName);


    if(!$conn){
        die('there is problem connection...... ' .mysqli_connect_error());
    }

   
    

?>