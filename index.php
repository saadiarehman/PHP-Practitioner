<?php
//create class named as task ,initiate class with multiple objects through array, display completed taska as line over them 
require 'functions.php';
require 'Task.php';
$pdo = connecttoDB();
$tasks = fetchAll($pdo);



require 'index.view.php';

?>