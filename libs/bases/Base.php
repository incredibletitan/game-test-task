<?php

namespace libs\bases;

use libs\landscapes\Landscape;
use libs\landscapes\UnsupportedLandscapeException;

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
        //Here will be base placing logic
        echo __CLASS__ . " successfully placed on " . get_class($landscape);

        return true;
    }

    /**
     * @return array - List of supported landscapes
     */
    abstract protected function getSupportedLandscapes();
}
