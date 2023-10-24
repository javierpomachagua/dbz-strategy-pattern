<?php

class Character
{
    public function __construct(
        public string $name
    ) {
    }

    public function specialAttack()
    {
        if ($this->name === 'Goku') {
            return 'Goku usa Genkidama';
        }

        if ($this->name === 'Vegeta') {
            return 'Vegeta usa Cañón Galick';
        }

        if ($this->name === 'Dende') {
            return 'Dende usa Curación';
        }

        return '';
    }

    public function attack(): string
    {
        if ($this->name === 'Goku') {
            return 'Goku usa Hamekameha';
        }

        // Repetimos el código para el ataque, ya que
        // es el mismo ataque de Gokú
        if ($this->name === 'Krilin') {
            return 'Krilin usa Hamekameha';
        }

        // ¿Cómo haríamos si es que Gohan quiere
        // usar el Hamekameha?
        if ($this->name === 'Gohan') {
            return 'Gohan usa Masenko';
        }

        if ($this->name === 'Vegeta') {
            return 'Vegeta usa Big Bang';
        }

        if ($this->name === 'Dende') {
            return 'Dende no ataca';
        }

        // Para todos los personajes que no reconozcamos
        // retornaremos vacío ya que no tenemos un parámetro
        // que valida los personajes
        return '';
    }
}