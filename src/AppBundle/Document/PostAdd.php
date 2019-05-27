<?php


namespace AppBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * 
 * @MongoDB\Document
 */
class PostAdd
{

    /**
     * @MongoDB\Id(type="int",strategy="INCREMENT");
     */
    protected $id;

    /**
     * @MongoDB\ReferenceOne(targetDocument="AppBundle\Document\User")
     */
    private $postby;

    /**
     * @MongoDB\Field(type="int")
     */
    protected $like;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $postname;

       /**
     * @MongoDB\Field(type="string")
     */
    protected $post;
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
    public function getPostby()
    {
        return $this->postby;
    }
    /**
     * @return mixed
     */
    public function getPostname()
    {
        return $this->postname;
    }

    /**
     * @param mixed $postname
     */
    public function setPostname($postname)
    {
        $this->postname = $postname;
    }
    /**
     * @param mixed $postby
     */
    public function setPostby($postby)
    {
        $this->postby = $postby;
    }

    /**
     * @return mixed
     */
    public function getLike()
    {
        return $this->like;
    }

    /**
     * @param mixed $like
     */
    public function setLike($like)
    {
        $this->like = $like;
    }

    /**
     * @return mixed
     */
    public function getPost()
    {
        return $this->post;
    }

    /**
     * @param mixed $post
     */
    public function setPost($post)
    {
        $this->post = $post;
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