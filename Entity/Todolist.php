<?php

namespace Entity;

class TodoList
{
    private string $todolist;

    public function __construct(string $todolist)
    {
        $this->todolist = $todolist;
    }

    public function getTodo(): string
    {
        return $this->todolist;
    }
    public function setTodo(string $todolist): void
    {
        $this->todolist = $todolist;
    }
}
