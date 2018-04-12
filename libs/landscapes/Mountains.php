<?php

namespace libs\landscapes;

/**
 * Class Mountains
 *
 * @author Yuriy Stos
 */
class Mountains implements Landscape
{
    /**
     * @inheritdoc
     */
    public function getSquare()
    {
        return rand(100, 200);
    }
}
