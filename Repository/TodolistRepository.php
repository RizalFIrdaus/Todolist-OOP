<?php

namespace Repository;

require_once __DIR__ . "/../Entity/Todolist.php";


use Entity\TodoList;


interface TodolistRepo
{
    public function save(TodoList $todoList): void;
    public function remove(int $number): bool;
    public function findAll(): array;
}

class TodolistRepoImp implements TodolistRepo
{
    public array $todoList = array();

    public function save(TodoList $todoList): void
    {
        $num = sizeof($this->todoList);
        $this->todoList[1] = $todoList;
    }
    public function remove(int $number): bool
    {
        return false;
    }
    public function findAll(): array
    {
        return $this->todoList;
    }
}

$test = new TodolistRepoImp();
$todo = new TodoList("Cobalah");
$test->save($todo);
$test->findAll();
