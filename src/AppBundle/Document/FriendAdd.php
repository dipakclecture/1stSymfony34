<?php


namespace AppBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Symfony\Component\Validator\Constraints as Assert;


/**
 *
 * @MongoDB\Document
 */

class FriendAdd
{
    /**
     * @MongoDB\Id(type="int",strategy="INCREMENT");
     */
    protected $id;

    /**
     * @MongoDB\ReferenceOne(targetDocument="AppBundle\Document\User")
     */
    private $sentby;

    /**
     * @MongoDB\ReferenceOne(targetDocument="AppBundle\Document\User")
     */
    private $receivedby;

    /**
     * @MongoDB\Field(type="int")
     */
    protected $status; //0=pending 1=accepted -1=rejected

    /**
     * @MongoDB\Field(type="timestamp")
     */
    private $created;

    /**
     * @MongoDB\Field(type="timestamp")
     */
    private $updated;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getSentby()
    {
        return $this->sentby;
    }

    /**
     * @param mixed $sentby
     */
    public function setSentby($sentby)
    {
        $this->sentby = $sentby;
    }

    /**
     * @return mixed
     */
    public function getReceivedby()
    {
        return $this->receivedby;
    }

    /**
     * @param mixed $receivedby
     */
    public function setReceivedby($receivedby)
    {
        $this->receivedby = $receivedby;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param mixed $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * @return mixed
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @param mixed $updated
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }


}