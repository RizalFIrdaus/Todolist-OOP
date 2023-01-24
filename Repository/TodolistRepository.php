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
        $num = sizeof($this->todoList) + 1;
        $this->todoList[$num] = $todoList;
    }
    public function remove(int $number): bool
    {
        if ($number > sizeof($this->todoList)) {
            return false;
        }

        for ($i = $number; $i < sizeof($this->todoList); $i++) {
            $this->todoList[$i] = $this->todoList[$i + 1];
        }

        unset($this->todoList[sizeof($this->todoList)]);
        return true;
    }
    public function findAll(): array
    {
        return $this->todoList;
    }
}
