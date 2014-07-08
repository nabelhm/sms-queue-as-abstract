<?php

namespace Cubalider\Component\Sms\Model;

/**
 * @author Yosmany Garcia <yosmanyga@gmail.com>
 */
class Bulk
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $position;

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }

    /**
     * @return int
     */
    public function getPosition() 
    {
        return $this->position;
    }
}