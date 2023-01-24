<?php

use Repository\TodolistRepoImp;
use Service\todolistServiceImp;
use View\todolistView;

require_once __DIR__ . "/Entity/Todolist.php";
require_once __DIR__ . "/Helper/Input.php";
require_once __DIR__ . "/Repository/TodolistRepository.php";
require_once __DIR__ . "/Service/TodolistService.php";
require_once __DIR__ . "/View/TodolistView.php";


echo "APP Todolist created by rizal" . PHP_EOL;

$todolistRepo = new TodolistRepoImp();
$todolistService = new todolistServiceImp($todolistRepo);
$todolistView = new todolistView($todolistService);
$todolistView->showTodolist();
