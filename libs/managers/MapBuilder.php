<?php

namespace libs\managers;

use libs\landscapes\Mountains;
use libs\landscapes\Plain;
use libs\landscapes\Water;

/**
 * Class GameManager
 *
 * @author Yuriy Stos
 */
class MapBuilder
{
    private $landscapes = [];

    public function createMountains(integer $count)
    {
        for ($i = 0; $i < $count; $i++) {
            $this->landscapes[] = new Mountains();
        }
    }

    public function createWater(integer $count)
    {
        for ($i = 0; $i < $count; $i++) {
            $this->landscapes[] = new Water();
        }
    }

    public function createPlain(integer $count)
    {
        for ($i = 0; $i < $count; $i++) {
            $this->landscapes[] = new Plain();
        }
    }

    public function getMap()
    {
        return $this->landscapes;
    }
}
