<?php

namespace libs\bases;

use libs\landscapes\Landscape;
use libs\landscapes\UnsupportedLandscapeException;
use libs\builders\UnitsBuilder;

abstract class Base
{
    /**
     * Place a base to the landscape
     *
     * @param Landscape $landscape
     * @throws \Exception
     *
     * @return bool
     */
    public function place(Landscape $landscape): bool
    {
        if (!in_array(get_class($landscape), $this->getSupportedLandscapes())) {
            throw new UnsupportedLandscapeException("Can't place base on that type of Landscape");
        }
        //There should placing logic, but method always returns true
        return true;
    }

    /**
     * Returns the list of supported landscapes
     *
     * @return array - List of supported landscapes
     */
    abstract protected function getSupportedLandscapes();

    /**
     * Returns UnitsBuilder
     *
     * @return UnitsBuilder
     */
    abstract public function getUnitsBuilder();
}
