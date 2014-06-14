<?php

namespace Cubalider\Component\Sms\Manager;

use Cubalider\Component\Sms\Manager\MessageInterface;
use Cubalider\Component\Sms\Manager\BulkInterface;

/**
 * @author Yosmany Garcia <yosmanyga@gmail.com>
 */
interface MessageManagerInterface
{
    /**
     * Pushes given messages into a new bulk.
     *
     * @api
     * @param MessageInterface[] $messages
     * @return BulkInterface The already created bulk
     */
    public function push($messages);

    /**
     * Pops given amount of messages.
     *
     * @api
     * @param integer             $amount
     * @return MessageInterface[] The messages
     */
    public function pop($amount);

    /**
     * Returns the amount of messages remaining for given bulk.
     * It returns false if bulk does not exist.
     *
     * @api
     * @param BulkInterface $bulk
     * @return int|false
     */
    public function estimate(BulkInterface $bulk);
}