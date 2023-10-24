<?php

class Dende extends Character
{
    public function specialAttack(): string
    {
        return 'Dende usa Curación';
    }

    public function attack(): string
    {
        return 'Dende no ataca';
    }
}