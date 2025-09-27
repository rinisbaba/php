<?php

try{
    $pdo=new PDO("mysql:host=localhost;dbname=db", "root","");
    $sql="DROP TABLE users";

    $pdo->exe($sql);

    echo "Column dropped";
}catch(PDOException $e){
    echo $e.getMessage();
}

?>