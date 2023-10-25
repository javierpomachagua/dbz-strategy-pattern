<?php

abstract class Character
{
    public function __construct(
        public AttackBehavior $attackBehavior
    ) {
    }

    abstract public function specialAttack(): string;

    public function attack(): string
    {
        return static::class. ' ' . $this->attackBehavior->attack();
    }

    public function setAttackBehavior(AttackBehavior $attackBehavior): void
    {
        $this->attackBehavior = $attackBehavior;
    }
}