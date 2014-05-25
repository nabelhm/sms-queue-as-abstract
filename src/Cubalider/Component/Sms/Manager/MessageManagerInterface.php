<?php

namespace Cubalider\Component\Sms\Manager;

/**
 * @author Yosmany Garcia <yosmanyga@gmail.com>
 */
interface MessageManagerInterface
{
    /**
     * Pushes given messages into a new bulk
     *
     * @param array $messages
     * @return void
     */
    public function push($messages);

    /**
     * Pops from the given bulk, the given amount of messages
     * If no amount is set, it pops all messages
     * If the bulk is empty, it deletes the bulk and returns false
     *
     * @param mixed     $bulk
     * @param integer   $amount
     * @return mixed
     */
    public function pop($bulk, $amount = null);
}