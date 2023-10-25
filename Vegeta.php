<?php

class Vegeta extends Character
{
    public function __construct(AttackBehavior $attackBehavior = new BigBang())
    {
        parent::__construct($attackBehavior);
    }

    public function specialAttack(): string
    {
        return 'Vegeta usa Cañón Galick';
    }
}