<?php

namespace tests\libs\units;

use libs\landscapes\Mountains;
use libs\landscapes\Swamp;
use libs\units\Machinery;
use libs\landscapes\Plain;
use libs\units\Plane;
use PHPUnit\Framework\TestCase;

/**
 * Class MachineryTest
 *
 * @author Yuriy Stos
 */
class MachineryTest extends TestCase
{
    /**
     * @covers Human::move()
     */
    public function testMove()
    {
        $human = new Machinery();
        $this->assertTrue($human->move(new Plain()));
        $this->assertTrue($human->move(new Swamp()));
    }

    /**
     * @covers Human::fight()
     * @expectedException libs\units\UnsupportedUnitException
     */
    public function testFightThrowsExceptionInCaseOfInappropriateTypeOfUnit()
    {
        (new Machinery())->fight(new Plane());
    }

    /**
     * @covers Human::move()
     * @expectedException libs\landscapes\UnsupportedLandscapeException
     */
    public function testMoveThrowsExceptionInCaseOfInappropriateTypeOfLandscape()
    {
        (new Machinery())->move(new Mountains());
    }
}
