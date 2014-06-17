<?php

namespace Cubalider\Test\Component\Sms\Entity;

use Cubalider\Component\Sms\Model\Message;

/**
 * @author Yusliel Garcia <yosmanyga@gmail.com>
 */
class MessageTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers \Cubalider\Component\Sms\Model\Message::getId
     */
    public function testId()
    {
        $message = new Message();
        $this->assertNull($message->getId());
    }

    /**
     * @covers \Cubalider\Component\Sms\Model\Message::setBulk
     * @covers \Cubalider\Component\Sms\Model\Message::getBulk
     */
    public function testBulk()
    {
        $message = new Message();
        $this->assertNull($message->getBulk());

        /** @var \Cubalider\Component\Sms\Model\Bulk $bulk */
        $bulk = $this->getMock('Cubalider\Component\Sms\Model\Bulk');
        $message->setBulk($bulk);
        $this->assertEquals($bulk, $message->getBulk());
    }

    /**
     * @covers \Cubalider\Component\Sms\Model\Message::setReceiver
     * @covers \Cubalider\Component\Sms\Model\Message::getReceiver
     */
    public function testReceiver()
    {
        $message = new Message();
        $this->assertNull($message->getReceiver());

        /** @var \Cubalider\Component\Mobile\Model\Mobile $receiver*/
        $receiver = $this->getMock('Cubalider\Component\Mobile\Model\Mobile');
        $message->setReceiver($receiver);
        $this->assertEquals($receiver, $message->getReceiver());
    }

    /**
     * @covers \Cubalider\Component\Sms\Model\Message::setSender
     * @covers \Cubalider\Component\Sms\Model\Message::getSender
     */
    public function testSender()
    {
        $message = new Message();
        $this->assertNull($message->getSender());

        /** @var \Cubalider\Component\Mobile\Model\Mobile $sender */
        $sender = $this->getMock('Cubalider\Component\Mobile\Model\Mobile');
        $message->setSender($sender);
        $this->assertEquals($sender, $message->getSender());
    }

    /**
     * @covers \Cubalider\Component\Sms\Model\Message::setText
     * @covers \Cubalider\Component\Sms\Model\Message::getText
     */
    public function testText()
    {
        $message = new Message();
        $this->assertNull($message->getText());

        $message->setText('foo');
        $this->assertEquals('foo', $message->getText());
    }
}