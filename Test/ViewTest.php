<?php

use Repository\TodolistRepoImp;
use Service\todolistServiceImp;
use View\todolistView;

require_once __DIR__ . "/../View/TodolistView.php";
require_once __DIR__ . "/../Service/TodolistService.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";

$repo = new TodolistRepoImp();
$service = new todolistServiceImp($repo);
$view = new todolistView($service);
$view->showTodolist();
