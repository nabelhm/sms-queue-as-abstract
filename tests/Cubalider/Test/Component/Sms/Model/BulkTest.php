<?php

namespace Cubalider\Test\Component\Sms\Entity;

use Cubalider\Component\Sms\Model\Bulk;

/**
 * @author Yusliel Garcia <yuslielg@gmail.com>
 */
class BulkTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers \Cubalider\Component\Sms\Model\Bulk::setId
     * @covers \Cubalider\Component\Sms\Model\Bulk::getId
     */
    public function testId()
    {
        $bulk = new Bulk();
        $this->assertNull($bulk->getId());

        $bulk->setId(1);
        $this->assertEquals(1, $bulk->getId());
    }

    /**
     * @covers \Cubalider\Component\Sms\Model\Bulk::setPosition
     * @covers \Cubalider\Component\Sms\Model\Bulk::getPosition
     */
    public function testPosition()
    {
        $bulk = new Bulk();
        $this->assertNull($bulk->getPosition());

        $bulk->setPosition(2);
        $this->assertEquals(2, $bulk->getPosition());
    }
}