<?php


namespace AppBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * /**
 * @MongoDB\Document
 */
class ProfileAdd
{
    /**
     * @MongoDB\Id(type="int",strategy="INCREMENT");
     */
    protected $id;

    /**
     * @MongoDB\ReferenceOne(targetDocument="AppBundle\Document\User")
     */
    private $for_id;

     /**
     * @MongoDB\Field(type="int")
     */
    protected $age;
    /**
     * @MongoDB\Field(type="string")
     */
    protected $gender;
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
    public function getForId()
    {
        return $this->for_id;
    }

    /**
     * @param mixed $for_id
     */
    public function setForId($for_id)
    {
        $this->for_id = $for_id;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
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