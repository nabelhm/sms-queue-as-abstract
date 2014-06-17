<?php

namespace Cubalider\Component\Sms\Model;

/**
 * @author Yosmany Garcia <yosmanyga@gmail.com>
 */
class Bulk
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $position;

    /**
     * @param integer $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param integer $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }

    /**
     * @return integer
     */
    public function getPosition() 
    {
        return $this->position;
    }
}