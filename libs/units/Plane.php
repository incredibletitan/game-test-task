<?php

namespace libs\units;

use libs\landscapes\Landscape;
use libs\landscapes\Mountains;
use libs\landscapes\Plain;
use libs\landscapes\Swamp;
use libs\landscapes\Water;

/**
 * Class Plane
 *
 * @author Yuriy Stos
 */
class Plane extends Unit
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
            Machinery::class,
            Plane::class
        ];
    }

    protected function getSupportedLandscapes()
    {
        return [
            Plain::class,
            Mountains::class,
            Water::class,
            Swamp::class
        ];
    }
}
