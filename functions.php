<?php

function connecttoDB(){
    try{
        return new PDO('mysql:host=127.0.0.1;dbname=mytodo',"root","");
    }
    Catch(PDOException $e){
        echo($e->getMessage());
    }
    
}


function fetchAll($pdo){

    $statement=$pdo->prepare("select * from todos");

    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');

}

function dd($data){
    echo "<pre>";
    die(var_dump($data));
    echo "$data";
}

?>