<?php

namespace View;

use Service\todolistService;

class todolistView
{
    private todolistService $todolistService;

    public function __construct(TodolistService $todolistService)
    {
        $this->todolistService = $todolistService;
    }

    public function showTodolist(): void
    {
        $this->todolistService->showTodolist();
        echo "1. Tambah Todolist" . PHP_EOL;
        echo "2. Hapus Todolist" . PHP_EOL;
        echo "x. Keluar" . PHP_EOL;
        $input = 1;
        if ($input == 1) {
            $this->addTodolist();
        }
    }
    public function addTodolist(): void
    {
        echo "Tambah Todolist" . PHP_EOL;
        echo "=============================================" . PHP_EOL;
        $input = "Berak";
        $this->todolistService->addTodolist($input);
    }
}
