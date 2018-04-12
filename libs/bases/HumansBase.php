<?php

namespace libs\bases;

use libs\landscapes\Plain;

/**
 * Class HumansBase
 *
 * @author Yuriy Stos
 */
class HumansBase extends Base
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
