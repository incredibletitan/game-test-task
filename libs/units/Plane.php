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
        //there will be moving logic
        echo __CLASS__ . " flying to " . get_class($landscape);
        return true;
    }

    /**
     * @inheritdoc
     */
    public function fightEnemy(Unit $unit): bool
    {
        //there will be fighting logic
        echo get_class($unit) . 'has destroyed';
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
