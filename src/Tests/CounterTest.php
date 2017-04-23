<?php
declare(strict_types=1);
/*
 * This file is part of the phpflo/phpflo-core package.
 *
 * (c) Marc Aschmann <maschmann@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PhpFlo\Component\Tests;

use PhpFlo\Component\Counter;
use PhpFlo\Component\Test\TestCase;

class CounterTest extends TestCase
{
    /** @var Counter */
    private $component;

    public function setUp()
    {
        $this->component = new Counter();
        $this->connectPorts($this->component);
    }

    public function testPorts()
    {
        $this->assertTrue($this->component->inPorts()->has('in'));
        $this->assertTrue($this->component->outPorts()->has('count'));
    }

    public function testBasicAppendCountWithInitialEmpty()
    {
        $this->component->appendCount(1);
        $this->component->sendCount();

        $countData = $this->getOutPortData('count');
        $this->assertEquals(1, $countData[0]);

        $this->assertTrue($this->wasCalled('count'));
    }

    public function testAppendTwoValues()
    {
        $this->component->appendCount(1);
        $this->component->appendCount(2); // value of count is irrelevant
        $this->component->sendCount();

        $countData = $this->getOutPortData('count');
        $this->assertEquals(2, $countData[0]);
    }

    public function testAppendNullValue()
    {
        $this->component->appendCount(1);
        $this->component->appendCount(2);
        $this->component->appendCount(null);
        $this->component->sendCount();

        $countData = $this->getOutPortData('count');
        $this->assertEquals(3, $countData[0]);
    }
}
