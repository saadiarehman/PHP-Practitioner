<?php
// create Associative array of task,display it with built in function,add a value,delete a value,
$tasks = [
    'title' => 'revision',
    'due' => '31st of july',
    'assign_to' => 'saadia',
    'completed' =>  false
];
//$tasks['subject'] ='cs'; ---->to add value
//unset ($tasks['subject'] ); ----> to delete value
die(var_dump($tasks));
require 'index.view.php';

?>