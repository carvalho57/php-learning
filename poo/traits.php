<?php

# TRAITS
# Grupo de métodos que podem ser inseridos dentro da classe


trait Habilidades 
{
    public function falar($mensagem)
    {
        echo "Say : $mensagem";
    }
}

class Humano
{
    use Habilidades;
}

$humano = new Humano();
$humano->falar("Diga algo");