<?php

class NoAttack implements AttackBehavior
{

    public function attack(): string
    {
        return 'no ataca';
    }
}