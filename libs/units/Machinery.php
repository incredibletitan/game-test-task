<?php

namespace libs\units;
use libs\landscapes\Landscape;

/**
 * Class Machinery
 *
 * @author Yuriy Stos
 */
class Machinery extends Unit
{
    public function getAllowedEnemies()
    {
        return ['Humans'];
    }

    public function getAllowedLandscapes()
    {
        return ['Mountains'];
    }

    public function fightEnemy(Unit $unit)
    {
        // TODO: Implement fightEnemy() method.
    }

    public function moveForward(Landscape $landscape)
    {
       echo  __CLASS__ . 'is moving on ' . strtolower(get_class($landscape));
    }
}
