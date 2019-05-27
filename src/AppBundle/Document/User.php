<?php
namespace AppBundle\Document;

use Doctrine\Bundle\MongoDBBundle\Validator\Constraints\Unique;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * /**
 * @MongoDB\Document
 * @Unique(fields="email", message="This email address is already in use")
 */
class User implements UserInterface
{
    /**
     * @MongoDB\Id(type="int",strategy="INCREMENT");
     */
    protected $id;
    /**
     * @MongoDB\Field(type="string")
     */
    protected $email;
    /**
     * @MongoDB\Field(type="string")
     */
    protected $name;
    /**
     * @MongoDB\Field(type="string")
     */
    protected $role;
    /**
     * @Assert\Length(max="4096")
     */
    protected $plainPassword;
    /**
     * @MongoDB\Field(type="string")
     */
    protected $password;
    /**
     * @MongoDB\Field(type="timestamp")
     */
    private $created;

     /**
     * @MongoDB\Field(type="timestamp")
     */
    private $updated;
    public function eraseCredentials()
    {
        return null;
    }
    public function getRole()
    {
        return $this->role;
    }
    public function setRole($role = null)
    {
        $this->role = $role;
    }
    public function getRoles()
    {
        return [$this->getRole()];
    }
    public function getId()
    {
        return $this->id;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getUsername()
    {
        return $this->email;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }
    public function getPlainPassword()
    {
        return $this->plainPassword;
    }
    public function setPlainPassword($plainPassword)
    {
        $this->plainPassword = $plainPassword;
    }
    public function getSalt()
    {
        return null;
    }
    public function getCreated()
    {
        return $this->created;
        //$time = $this->created->sec();
        //return (date('d-m-Y H:i:s A',$time));
    }

    public function getUpdated()
    {
        return $this->updated;
        //$time = $this->created->sec();
        //return (date('d-m-Y H:i:s A',$time));
    }

    /**
     * @param mixed $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * @param mixed $updated
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }
}