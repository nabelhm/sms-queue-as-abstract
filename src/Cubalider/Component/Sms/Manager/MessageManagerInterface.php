<?php

namespace Cubalider\Component\Sms\Manager;

use Cubalider\Component\Sms\Model\Message;
use Cubalider\Component\Sms\Model\Bulk;

/**
 * @author Yosmany Garcia <yosmanyga@gmail.com>
 */
interface MessageManagerInterface
{
    /**
     * Pushes given messages into a new bulk.
     *
     * @api
     * @param Message[] $messages
     * @return Bulk The already created bulk
     */
    public function push($messages);

    /**
     * Pops given amount of messages.
     *
     * @api
     * @param integer $amount
     * @return Message[] The messages
     */
    public function pop($amount);

    /**
     * Returns the amount of messages remaining for given bulk.
     * It returns false if bulk does not exist.
     *
     * @api
     * @param Bulk $bulk
     * @return int|false
     */
    public function estimate(Bulk $bulk);
}