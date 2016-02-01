<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *@ORM\Entity
 * @ORM\Table(name="user")
 **/
Class User {
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * */
    protected $id;
    /**
     * @ORM\Column(type="string")
    * */
    protected $loginname;
    /**
     * @ORM\Column(type="string")
     * */
    protected $firstname;
    /**
     * @ORM\Column(type="string")
     * */
    protected $lastname;
    /**
     * @ORM\Column(type="string")
     * */    
    protected $password;
    /**
     * @ORM\Column(type="integer", options={ "default":0})
     * */    
    protected $isactive;
    /**
     * @ORM\Column(type="integer", options={ "default":0})
     * */    
    protected $isdeleted;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set loginname
     *
     * @param string $loginname
     *
     * @return User
     */
    public function setLoginname($loginname)
    {
        $this->loginname = $loginname;

        return $this;
    }

    /**
     * Get loginname
     *
     * @return string
     */
    public function getLoginname()
    {
        return $this->loginname;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     *
     * @return User
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return User
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set isactive
     *
     * @param integer $isactive
     *
     * @return User
     */
    public function setIsactive($isactive)
    {
        $this->isactive = $isactive;

        return $this;
    }

    /**
     * Get isactive
     *
     * @return integer
     */
    public function getIsactive()
    {
        return $this->isactive;
    }

    /**
     * Set isdeleted
     *
     * @param integer $isdeleted
     *
     * @return User
     */
    public function setIsdeleted($isdeleted)
    {
        $this->isdeleted = $isdeleted;

        return $this;
    }

    /**
     * Get isdeleted
     *
     * @return integer
     */
    public function getIsdeleted()
    {
        return $this->isdeleted;
    }
}
