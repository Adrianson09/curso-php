<?php

declare(strict_types=1);
class SuperHero
{

    // Promoted properties -> php 8
    public function __construct(
        private string  $name,
        public array $powers,
        public string $planet
    ) {}

    public function attack()
    {
        return "¡$this->name ataca con sus poderes!";
    }

    public function description()
    {
        $powers = implode(", ", $this->powers);
        return "$this->name es un superhéroe que viene de 
        $this->planet y tiene los siguientes poderes: $powers";
    }
}

$hero = new SuperHero("Superman", ["Superfuerza", "Super Calzones Rojos", "Rayos Láser"], "Krypton");

echo $hero->description();
