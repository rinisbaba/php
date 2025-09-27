<?php

try{
    $pdo=new PDO("mysql:host=localhost;dbname=db", "root","");
    $sql="ALTER TABLE user DROP COLUMN username";

    $pdo->exe($sql);

    echo "Column dropped";
}catch(PDOException $e){
    echo $e.getMessage();
}

?>