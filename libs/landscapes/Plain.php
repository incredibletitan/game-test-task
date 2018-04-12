<?php

namespace libs\landscapes;

/**
 * Class Plain
 *
 * @author Yuriy Stos
 */
class Plain implements Landscape
{
    /**
     * @inheritdoc
     */
    public function getSquare()
    {
        return rand(100, 200);
    }
}
