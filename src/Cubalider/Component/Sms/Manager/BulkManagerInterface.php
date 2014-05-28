<?php

namespace Cubalider\Component\Sms\Manager;

/**
 * @author Yosmany Garcia <yosmanyga@gmail.com>
 */
interface BulkManagerInterface
{
    /**
     * Adds a bulk into the last position.
     *
     * @internal
     * @return mixed The already created bulk
     */
    public function push();

    /**
     * Gets the bulk at first position.
     *
     * @internal
     * @return mixed
     */
    public function approach();

    /**
     * Removes the bulk at first position.
     *
     * @internal
     * @return void
     */
    public function pop();
}