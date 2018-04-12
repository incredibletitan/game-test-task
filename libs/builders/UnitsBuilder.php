<?php

namespace libs\builders;

use libs\components\UnitsGeneratingStrategy;
use libs\units\Human;
use libs\units\Machinery;
use libs\units\Plane;

/**
 * Class UnitsBuilder
 *
 * @author Yuriy Stos
 */
class UnitsBuilder
{
    /**
     * @var array - List of landscapes
     */
    private $units = [];

    /**
     * Creates $count of Humans units
     *
     * @param $count - Count of humans needed to create
     * @return $this
     */
    public function createHumans($count)
    {
        for ($i = 0; $i < $count; $i++) {
            $this->units[] = new Human();
        }
        return $this;
    }

    /**
     * Creates $count of Machinery units
     *
     * @param $count - Count of machinery needed to create
     * @return $this
     */
    public function createMachinery($count)
    {
        for ($i = 0; $i < $count; $i++) {
            $this->units[] = new Machinery();
        }
        return $this;
    }

    /**
     * Creates $count of Plane units
     *
     * @param $count - Count of planes needed to create
     * @return $this
     */
    public function createPlanes($count)
    {
        for ($i = 0; $i < $count; $i++) {
            $this->units[] = new Plane();
        }
        return $this;
    }

    /**
     * Returns generated list of Units
     *
     * @param UnitsGeneratingStrategy|null $generatingStrategy
     * @return array
     */
    public function getUnits(UnitsGeneratingStrategy $generatingStrategy = null): array
    {
        if ($generatingStrategy !== null) {
            return $generatingStrategy->process($this->units);
        }
        return $this->units;
    }
}
