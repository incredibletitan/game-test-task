<?php

namespace libs\units;

use libs\landscapes\Landscape;
use libs\landscapes\Plain;

/**
 * Class Machinery
 *
 * @author Yuriy Stos
 */
class Machinery extends Unit
{
    /**
     * @inheritdoc
     */
    public function moveForward(Landscape $landscape): bool
    {
        //there will be moving logic
        echo __CLASS__ . " moved to " . get_class($landscape);
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
            Machinery::class
        ];
    }

    /**
     * @inheritdoc
     */
    protected function getSupportedLandscapes()
    {
        return [
            Plain::class
        ];
    }
}
