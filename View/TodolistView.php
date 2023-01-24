<?php

namespace View;

require_once __DIR__ . "/../Helper/Input.php";

use Service\todolistService;
use Helper\Helper;

class todolistView
{
    private todolistService $todolistService;

    public function __construct(TodolistService $todolistService)
    {
        $this->todolistService = $todolistService;
    }

    public function showTodolist(): void
    {
        while (true) {

            $this->todolistService->showTodolist();
            echo "=============================================" . PHP_EOL;
            echo "Menu Pilihan" . PHP_EOL;
            echo "1. Tambah Todolist" . PHP_EOL;
            echo "2. Hapus Todolist" . PHP_EOL;
            echo "x. Keluar" . PHP_EOL;
            $input = Helper::Input("Masukan Nomor Pilihan : ");
            if ($input == 1) {
                $this->addTodolist();
            } else if ($input == 2) {
                $this->removeTodolist();
            } else if ($input == "x") {
                break;
            } else {
                echo "Inputan kamu salah!" . PHP_EOL;
            }
        }
        echo "Sampai Jumpa Lagi" . PHP_EOL;
    }
    public function addTodolist(): void
    {
        echo "Tambah Todolist" . PHP_EOL;
        echo "=============================================" . PHP_EOL;
        $input = Helper::Input("Masukan todolist kamu : ");
        $this->todolistService->addTodolist($input);
    }
    public function removeTodolist(): void
    {
        echo "Hapus Todolist" . PHP_EOL;
        echo "=============================================" . PHP_EOL;
        $input = Helper::Input("Masukan nomor todolist yang dihapus : ");
        $this->todolistService->removeTodolist($input);
    }
}
