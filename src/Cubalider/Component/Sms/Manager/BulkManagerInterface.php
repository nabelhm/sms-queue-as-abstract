<?php

namespace Cubalider\Component\Sms\Manager;

/**
 * @author Yosmany Garcia <yosmanyga@gmail.com>
 */
interface BulkManagerInterface
{
    /**
     * Removes the bulk at first position.
     *
     * @internal
     * @return void
     */
    public function pop();
}