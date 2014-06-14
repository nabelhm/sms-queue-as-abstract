<?php

namespace Cubalider\Component\Sms\Manager;

use Cubalider\Component\Mobile\Model\MobileInterface;

/**
 * @author Yosmany Garcia <yosmanyga@gmail.com>
 */
class Message implements MessageInterface
{
    /**
     * @var BulkInterface
     */
    private $bulk;

    /**
     * @var MobileInterface
     */
    private $sender;

    /**
     * @var MobileInterface
     */
    private $receiver;

    /**
     * @var string
     */
    private $text;

    /**
     * @param BulkInterface $bulk
     */
    public function setBulk(BulkInterface $bulk)
    {
        $this->bulk = $bulk;
    }

    /**
     * @return BulkInterface
     */
    public function getBulk()
    {
        return $this->bulk;
    }

    /**
     * @param MobileInterface $sender
     */
    public function setSender(MobileInterface $sender)
    {
        $this->sender = $sender;
    }

    /**
     * @return MobileInterface
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * @param MobileInterface $receiver
     */
    public function setReceiver(MobileInterface $receiver)
    {
        $this->receiver = $receiver;
    }

    /**
     * @return MobileInterface
     */
    public function getReceiver()
    {
        return $this->receiver;
    }

    /**
     * @param string $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }
}