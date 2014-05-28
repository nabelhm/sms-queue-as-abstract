<?php

namespace Cubalider\Component\Sms\Manager;

/**
 * @author Yosmany Garcia <yosmanyga@gmail.com>
 */
interface BulkManagerInterface
{
    /**
     * Adds given bulk into the last position.
     *
     * @internal
     * @param mixed $bulk
     * @return void
     */
    public function push($bulk);

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