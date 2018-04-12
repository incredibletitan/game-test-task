<?php

namespace tests\bases;

use libs\bases\HumansBase;
use libs\landscapes\Plain;
use libs\landscapes\Swamp;
use PHPUnit\Framework\TestCase;

/**
 * Class HumanBaseTest
 *
 * @author Yuriy Stos
 */
class HumanBaseTest extends TestCase
{
    /**
     * @covers HumansBase::place()
     */
    public function testPlace()
    {
        $this->assertTrue((new HumansBase())->place(new Plain()));
    }

    /**
     * @covers HumansBase::place()
     * @expectedException libs\landscapes\UnsupportedLandscapeException
     */
    public function testPlaceThrowsExceptionInCaseOfInappropriateLandscape()
    {
        $humanBase = new HumansBase();
        $humanBase->place(new Swamp());
    }
}
