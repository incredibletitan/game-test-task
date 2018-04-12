<?php

namespace libs\bases;

use libs\landscapes\Plain;
use libs\builders\UnitsBuilder;

/**
 * Class HumansBase
 *
 * @author Yuriy Stos
 */
class HumansBase extends Base
{
    /**
     * @var UnitsBuilder - Units builder
     */
    private $unitsBuilder;

    /**
     * HumansBase constructor.
     */
    public function __construct()
    {
        $this->unitsBuilder = new UnitsBuilder();
    }

    /**
     * @inheritdoc
     */
    public function getUnitsBuilder()
    {
        return $this->unitsBuilder;
    }

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
