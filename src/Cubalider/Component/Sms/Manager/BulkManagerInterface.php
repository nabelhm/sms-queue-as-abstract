<?php

namespace Cubalider\Component\Sms\Manager;

use Cubalider\Component\Sms\Model\Bulk;

/**
 * @author Yosmany Garcia <yosmanyga@gmail.com>
 */
interface BulkManagerInterface
{
    /**
     * Adds a bulk into the last position.
     *
     * @internal
     *
     * @return Bulk The already created bulk
     */
    public function push();

    /**
     * Gets the bulk at first position.
     *
     * @internal
     *
     * @return Bulk
     */
    public function approach();

    /**
     * Removes the bulk at first position.
     *
     * @internal
     *
     * @return void
     */
    public function pop();
}