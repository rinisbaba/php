<?php

try{
    $pdo=new PDO("mysql:host=localhost;dbname=db","root","");

    $sql="ALTER TABLE user add email varchar(255)";


    $pdo->exec($sql);

    echo"column created successfully";
}catch(PDOException $e){
    echo "error creating colum: " . $e->getMessage();
}

?>