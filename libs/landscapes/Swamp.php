<?php

namespace libs\landscapes;

/**
 * Class Swap
 *
 * @author Yuriy Stos
 */
class Swamp implements Landscape
{
    /**
     * @inheritdoc
     */
    public function getSquare()
    {
        return rand(100, 200);
    }
}