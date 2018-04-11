<?php

namespace libs\managers;

use libs\bases\Base;
use libs\maps\Map;

/**
 * Class GameManager
 *
 * @author Yuriy Stos
 */
abstract class MapBuilder
{
    abstract public function createMountains($count);
    abstract public function createWater($count);
    abstract public function createPlain($count);
    abstract public function getMap();
}
