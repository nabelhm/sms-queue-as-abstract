<?php

namespace Cubalider\Component\Sms\Manager;

/**
 * @author Yosmany Garcia <yosmanyga@gmail.com>
 */
interface BulkManagerInterface
{
    /**
     * Gets the bulk with first position
     *
     * @return mixed
     */
    public function pop();
}