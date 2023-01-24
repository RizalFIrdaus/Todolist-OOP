<?php

namespace Helper;

class Helper
{
    static function Input(string $info): string
    {
        echo "$info";
        $res = fgets(STDIN);
        return trim($res);
    }
}
