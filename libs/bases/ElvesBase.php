<?php

namespace libs\bases;

use libs\landscapes\Plain;

/**
 * Class ElvesBase
 *
 * @author Yuriy Stos
 */
class ElvesBase extends Base
{
    /**
     * @inheritdoc
     *
     * @return array
     */
    protected function getSupportedLandscapes()
    {
        return [
            Plain::class
        ];
    }
}
