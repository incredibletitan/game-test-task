<?php

namespace libs\bases;

use libs\landscapes\Landscape;

abstract class Base
{
    public function place(Landscape $landscape)
    {
        if (!in_array(get_class($landscape), $this->getSupportedLandscapes())) {
            throw new \Exception("Can't place base on that type of Landscape");
        }
        echo __CLASS__ . " successfully placed on " . get_class($landscape);
    }

    /**
     * @return array - List of supported landscapes
     */
    abstract protected function getSupportedLandscapes();
}
