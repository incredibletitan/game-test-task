<?php

namespace libs\units;

use libs\landscapes\Landscape;
use PHPUnit\Runner\Exception;

/**
 * Unit base interface
 */
abstract class Unit
{
    /**
     * Move to the next point
     * @throws Exception
     */
    public function move(Landscape $landscape)
    {
        if (!in_array(get_class($landscape), $this->getSupportedLandscapes())) {
            throw new \Exception("Can't fight with this type of enemy");
        }
        $this->moveForward($landscape);
    }

    /**
     * Fight the enemy
     *
     * @param Unit $unit - specific unit
     */
    public function fight(Unit $unit)
    {
        if (!in_array(get_class($unit), $this->getAllowedEnemies())) {
            throw new \Exception("Can't fight with this type of enemy - " . get_class($unit));
        }
        $this->fightEnemy($unit);
    }

    abstract protected function fightEnemy(Unit $unit);

    /**
     * @param Landscape $landscape
     * @return mixed
     */
    abstract protected function moveForward(Landscape $landscape);

    /**
     * @return array - List of supported landscapes
     */
    abstract protected function getSupportedLandscapes();

    /**
     * @return array - List of supported landscapes
     */
    abstract protected function getAllowedEnemies();
}
