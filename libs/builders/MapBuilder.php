<?php

namespace libs\builders;

use libs\components\MapGeneratingStrategy;
use libs\landscapes\Mountains;
use libs\landscapes\Plain;
use libs\landscapes\Swamp;
use libs\landscapes\Water;

/**
 * Class GameManager
 *
 * @author Yuriy Stos
 */
class MapBuilder
{
    /**
     * @var array - List of landscapes
     */
    private $landscapes = [];

    /**
     * Creates $count of Mountains landscapes
     *
     * @param $count - Count of mountains needed to create
     * @return $this
     */
    public function createMountains($count)
    {
        for ($i = 0; $i < $count; $i++) {
            $this->landscapes[] = new Mountains();
        }
        return $this;
    }

    /**
     * Creates $count of Water landscapes
     *
     * @param $count - Count of water landscapes needed to create
     * @return $this
     */
    public function createWater($count)
    {
        for ($i = 0; $i < $count; $i++) {
            $this->landscapes[] = new Water();
        }
        return $this;
    }

    /**
     * Creates $count of Plain landscapes
     *
     * @param $count - Count of plain landscapes needed to create
     * @return $this
     */
    public function createPlain($count)
    {
        for ($i = 0; $i < $count; $i++) {
            $this->landscapes[] = new Plain();
        }
        return $this;
    }

    /**
     * Creates $count of Swamp landscapes
     *
     * @param $count - Count of swamp landscapes needed to create
     * @return $this
     */
    public function createSwamp($count)
    {
        for ($i = 0; $i < $count; $i++) {
            $this->landscapes[] = new Swamp();
        }
        return $this;
    }

    /**
     * Returns generated list of Landscapes
     *
     * @param MapGeneratingStrategy|null $generatingStrategy
     * @return array - list of Landscape objects
     */
    public function getMap(MapGeneratingStrategy $generatingStrategy = null): array
    {
        if ($generatingStrategy !== null) {
            return $generatingStrategy->process($this->landscapes);
        }
        return $this->landscapes;
    }
}
