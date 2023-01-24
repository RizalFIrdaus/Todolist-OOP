<?php

class Helper
{
    static function Input(string $info): string
    {
        echo "$info" . PHP_EOL;
        $res = fgets(STDIN);
        return trim($res);
    }
}
