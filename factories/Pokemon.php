<?php
namespace Faker\Provider;

class Pokemon extends \Faker\Provider\Base 
{
    protected static $pokemon = [
        'Pikachu',
        'Bulbasaur',
        'Cubone',
        'Charizard',
        'Marowak',
        'Gastly',
        'Alakazam',
        'Arcanine',
        'Vaporeon',
        'Flareon',
        'Venusaur',
        'Wartortle'
    ];

    /**
     * undocumented function
     *
     * @return void
     */
    public function pokemon()
    {
        return static::randomElement(static::$pokemon);
    }
    
}
