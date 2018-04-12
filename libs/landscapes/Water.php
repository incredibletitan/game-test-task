<?php

namespace libs\landscapes;

/**
 * Class Water
 *
 * @author Yuriy Stos
 */
class Water implements Landscape
{
    /**
     * @inheritdoc
     */
    public function getSquare()
    {
        return rand(100, 200);
    }
}