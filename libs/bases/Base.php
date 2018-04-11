<?php

namespace libs\bases;

use libs\landscapes\Plain;
use libs\maps\Map;

abstract class Base
{
    protected $units = [];

    public function place(Map $map)
    {
        $landscapes = $map->getLandscapes();
        $countOfLandscapes = count($landscapes);

        for ($i = 0; $i < $countOfLandscapes; $i++) {
            if (!($landscapes[$i] instanceof Plain)) {
                continue;
            }
            return $i;
        }
    }

    public function getUnits()
    {
        return $this->units;
    }
}
