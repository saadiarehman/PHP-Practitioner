<?php

function CheckPermission($age){
    if ($age>21){
        echo "Welcome to club";
    }
    else
    {
        echo "Sorry You are not allowed";
    }
}

?>