<?php

namespace libs\units;

use libs\landscapes\Landscape;
use libs\landscapes\UnsupportedLandscapeException;

/**
 * Unit base interface
 */
abstract class Unit
{
    /**
     * Move to the next point
     *
     * @throws UnsupportedLandscapeException
     *
     * @param Landscape $landscape
     *
     * @return bool
     */
    public function move(Landscape $landscape): bool
    {
        if (!in_array(get_class($landscape), $this->getSupportedLandscapes())) {
            throw new UnsupportedLandscapeException("Can't move to this type of landscape");
        }
        return $this->moveForward($landscape);
    }

    /**
     * Fight the enemy
     *
     * @throws UnsupportedUnitException - In case of can't fight unit with specified type
     *
     * @param Unit $unit - specific unit
     *
     * @return bool
     */
    public function fight(Unit $unit): bool
    {
        if (!in_array(get_class($unit), $this->getAllowedEnemies())) {
            throw new UnsupportedUnitException("Can't fight with this type of enemy - " . get_class($unit));
        }
        return $this->fightEnemy($unit);
    }

    /**
     * Enemy fighting logic
     *
     * @param Unit $unit
     * @return mixed
     */
    abstract protected function fightEnemy(Unit $unit): bool;

    /**
     * Moving forward logic
     *
     * @param Landscape $landscape
     * @return bool
     */
    abstract protected function moveForward(Landscape $landscape): bool;

    /**
     * Returns supported landscapes list
     *
     * @return array - List of supported landscapes
     */
    abstract protected function getSupportedLandscapes();

    /**
     * List of allowed to fight enemies
     *
     * @return array - List of supported enemies
     */
    abstract protected function getAllowedEnemies();
}
