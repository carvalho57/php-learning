<?php 

// declare(strict_types=1); #uncomment

/*
    Tipos bool, int, float e string foram adicionadas no PHP 7
    É contudo necessário saber que o php faz conversões automaticas

*/

# nullable parameter
function writeMessage(?string $message)
{
    echo "\n" . $message;
}

function callback(callable $function, $data)
{
    $function($data);
}

function myFunc() : array {
    return [1,2,3];
}

$talk = function($message) 
{
    echo "\n" . $message;
};
writeMessage("Ola mundo");
writeMessage(2500);
// writeMessage(['a','b']);
callback($talk, "Write this message");

# STRICT TYPING