<?php

namespace libs\landscapes;

/**
 * Class Mountains
 *
 * @author Yuriy Stos
 */
class Mountains implements Landscape
{
    public function getSquare()
    {
        return rand(100, 150);
    }
}
