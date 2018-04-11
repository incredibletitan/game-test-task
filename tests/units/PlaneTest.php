<?php

namespace tests\libs\units;

use libs\landscapes\Mountains;
use libs\landscapes\Plain;
use libs\landscapes\Swamp;
use libs\landscapes\Water;
use libs\units\Human;
use libs\units\Machinery;
use libs\units\Plane;
use PHPUnit\Framework\TestCase;

/**
 * Class PlaneTest
 *
 * @author Yuriy Stos
 */
class PlaneTest extends TestCase
{
    /**
     * @covers Plane::move()
     */
    public function testMove()
    {
        $human = new Plane();
        $this->assertTrue($human->move(new Water()));
        $this->assertTrue($human->move(new Mountains()));
        $this->assertTrue($human->move(new Plain()));
        $this->assertTrue($human->move(new Swamp()));
    }

    /**
     * @covers Plane::fight()
     */
    public function testFight()
    {
        $human = new Plane();
        $this->assertTrue($human->fight(new Plane()));
        $this->assertTrue($human->fight(new Human()));
        $this->assertTrue($human->fight(new Machinery()));
    }
}
