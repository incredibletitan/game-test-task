<?php

namespace libs\units;

use libs\landscapes\Landscape;
use libs\landscapes\Mountains;
use libs\landscapes\Plain;
use libs\landscapes\Water;

/**
 * Class Human
 *
 * @author Yuriy Stos
 */
class Human extends Unit
{
    public function moveForward(Landscape $landscape)
    {
        echo __CLASS__ . 'is moving';
    }

    public function fightEnemy(Unit $unit)
    {
        echo get_class($unit) . 'has destroyed';
    }

    protected function getAllowedEnemies()
    {
        return [
            Human::class,
            Machinery::class
        ];
    }

    protected function getSupportedLandscapes()
    {
        return [
            Plain::class,
            Mountains::class,
            Water::class
        ];
    }
}
