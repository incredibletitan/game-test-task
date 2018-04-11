<?php

namespace libs\units;

use libs\landscapes\Landscape;

/**
 * Unit base interface
 */
abstract class Unit
{
    /**
     * Returns list of allowed landscapes
     *
     * @return array - Array with supported landscapes, e.g. ['Mountains']
     */
    abstract public function getAllowedLandscapes();

    /**
     * Returns list of allowed enemies
     *
     * @return array - Array with supported enemies, e.g. ['Humans']
     */
    abstract public function getAllowedEnemies();

    /**
     * Move to the next point
     */
    public function move(Landscape $landscape)
    {
        if (in_array(get_class($landscape), $this->getAllowedLandscapes())) {
            $this->moveForward($landscape);
        }
    }

    /**
     * Fight the enemy
     *
     * @param Unit $unit - specific unit
     */
    public function fight(Unit $unit)
    {
        if (in_array(get_class(unit), $this->getAllowedEnemies())) {
            $this->fightEnemy($unit);
        }
    }

    abstract public function fightEnemy(Unit $unit);

    /**
     * @param Landscape $landscape
     * @return mixed
     */
    abstract public function moveForward(Landscape $landscape);
}
