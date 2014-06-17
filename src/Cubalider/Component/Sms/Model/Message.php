<?php

namespace Cubalider\Component\Sms\Model;

use Cubalider\Component\Mobile\Model\Mobile;

/**
 * @author Yusliel Garcia <yuslielg@gmail.com>
 * @author Yosmany Garcia <yosmanyga@gmail.com>
 */
class Message
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var Bulk
     */
    private $bulk;
    
    /**
     * @var Mobile
     */
    private $receiver;

    /**
     * @var Mobile
     */
    private $sender;

    /**
     * @var string
     */
    private $text;

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param Bulk $bulk
     */
    public function setBulk(Bulk $bulk)
    {
        $this->bulk = $bulk;
    }

    /**
     * @return Bulk
     */
    public function getBulk()
    {
        return $this->bulk;
    }

    /**
     * @param Mobile $receiver
     */
    public function setReceiver(Mobile $receiver)
    {
        $this->receiver = $receiver;
    }

    /**
     * @return Mobile
     */
    public function getReceiver()
    {
        return $this->receiver;
    }

    /**
     * @param Mobile $sender
     */
    public function setSender(Mobile $sender)
    {
        $this->sender = $sender;
    }

    /**
     * @return Mobile
     */
    public function getSender()
    {
        return $this->sender;
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