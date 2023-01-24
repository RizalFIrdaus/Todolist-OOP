<?php
require_once __DIR__ . "/../Repository/TodolistRepository.php";
require_once __DIR__ . "/../Entity/Todolist.php";


use Entity\TodoList;
use Repository\TodolistRepoImp;


$testRepo = new TodolistRepoImp();
$todo1 = new TodoList("Belajar PHP Database");
$todo2 = new TodoList("Belajar PHP WEB");
$todo3 = new TodoList("Makan");
$todo4 = new Todolist("Mandi");
$testRepo->save($todo1);
$testRepo->save($todo2);
$testRepo->save($todo3);
$testRepo->save($todo4);
$testRepo->remove(2);
var_dump($testRepo->findAll());
