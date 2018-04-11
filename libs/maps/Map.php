<?php
namespace libs\maps;

use libs\landscapes\Landscape;

/**
 * Class Map
 *
 * @author Yuriy Stos
 */
class Map
{
    private $landscapesList;

    public function addLandscape(Landscape $landscape)
    {
        $this->landscapesList[] = $landscape;
    }

    public function getLandscapes()
    {
        return $this->landscapesList;
    }
}
