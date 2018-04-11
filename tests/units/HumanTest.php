<?php

namespace tests\libs\units;

use libs\landscapes\Mountains;
use libs\landscapes\Plain;
use libs\landscapes\Swamp;
use libs\landscapes\Water;
use libs\units\Human;
use libs\units\Plane;
use PHPUnit\Framework\TestCase;

/**
 * Class HumanTest
 *
 * @author Yuriy Stos
 */
class HumanTest extends TestCase
{
    /**
     * @covers Human::move()
     */
    public function testMove()
    {
        $human = new Human();
        $this->assertTrue($human->move(new Water()));
        $this->assertTrue($human->move(new Mountains()));
        $this->assertTrue($human->move(new Plain()));
    }

    /**
     * @covers Human::fight()
     * @expectedException libs\units\UnsupportedUnitException
     */
    public function testFightThrowsExceptionInCaseOfInappropriateTypeOfUnit()
    {
        (new Human())->fight(new Plane());
    }

    /**
     * @covers Human::move()
     * @expectedException libs\landscapes\UnsupportedLandscapeException
     */
    public function testMoveThrowsExceptionInCaseOfInappropriateTypeOfLandscape()
    {
        (new Human())->move(new Swamp());
    }
}
