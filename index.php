<?php
//create class named as task ,initiate class with multiple objects through array, display completed taska as line over them 
require 'functions.php';
class Task {
    public $description;
    public $completed = false;
    public function __construct($description){
        $this->description=$description;
    }
    public function isComplete(){
        return $this->completed;
    }
    public function complete(){
        $this->completed=true;
    }
}
$tasks = [
    new Task('Go to store'),
    new Task('Finish screencast'),
    new Task('clean my room')
];

$tasks[0]->complete();

require 'index.view.php';

?>