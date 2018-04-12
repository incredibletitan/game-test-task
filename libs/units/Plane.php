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
    /**
     * @inheritdoc
     */
    public function moveForward(Landscape $landscape): bool
    {
        //Here should be moving logic, but method returns true
        return true;
    }

    /**
     * @inheritdoc
     */
    public function fightEnemy(Unit $unit): bool
    {
        //Here should be fighting logic, but method returns true
        return true;
    }

    /**
     * @inheritdoc
     */
    protected function getAllowedEnemies()
    {
        return [
            Human::class,
            Machinery::class,
            Plane::class
        ];
    }

    /**
     * @inheritdoc
     */
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
