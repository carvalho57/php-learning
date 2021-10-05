<?php


class Test {
    static $nome;
    static function Testing()
    {
        echo "Testing " . self::$nome;
    }
}

Test::$nome = "Gabriel";
Test::Testing();