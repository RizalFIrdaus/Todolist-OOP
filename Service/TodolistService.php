<?php

namespace Service;

use Entity\TodoList;
use Repository\TodolistRepoImp;

interface todolistService
{
    public function showTodolist(): void;
    public function addTodolist(string $todo): void;
    public function removeTodolist(int $num): void;
}


class todolistServiceImp implements todolistService
{
    private TodolistRepoImp $todolistRepoImp;

    public function __construct(TodolistRepoImp $todolistRepoImp)
    {
        $this->todolistRepoImp = $todolistRepoImp;
    }
    public function showTodolist(): void
    {
        echo "APP Todolist created by rizal" . PHP_EOL;
        foreach ($this->todolistRepoImp->findAll() as $number => $value) {
            echo "$number. " . $value->getTodo() . PHP_EOL;
        }
    }
    public function addTodolist(string $todo): void
    {
        $todo = new TodoList($todo);
        $this->todolistRepoImp->save($todo);
        echo "Berhasil Menambahkan Todolist" . PHP_EOL;
    }
    public function removeTodolist(int $num): void
    {
        $remove = $this->todolistRepoImp->remove($num);
        if ($remove) {
            echo "Berhasil Menghapus" . PHP_EOL;
        } else {
            echo "Gagal Menghapus" . PHP_EOL;
        }
    }
}
