<?php

$newQue = new SplQueue();
$newQue->enqueue('welcome');
$newQue->enqueue('to');
$newQue->enqueue('php');
$newQue->dequeue();
// echo $newQue->dequeue(); // This will output 'welcome'
echo "<pre>";
var_dump($newQue);
