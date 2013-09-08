<?php
/**
 * Created by JetBrains PhpStorm.
 * User: sam
 * Date: 8/24/13
 * Time: 4:19 AM
 * To change this template use File | Settings | File Templates.
 */

namespace Photograph\PhotoBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class Message
{

    /**
     * @MongoDB\Id
     */
    protected $id;
    /**
     * @MongoDB\String
     */
    protected $name;
    /**
     * @MongoDB\String
     */
    protected $subject;
    /**
     * @MongoDB\String
     */
    protected $body;
    /**
     * @MongoDB\String
     */
    protected $email;

   
    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set subject
     *
     * @param string $subject
     * @return self
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Get subject
     *
     * @return string $subject
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set body
     *
     * @param string $body
     * @return self
     */
    public function setBody($body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Get body
     *
     * @return string $body
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Get email
     *
     * @return string $email
     */
    public function getEmail()
    {
        return $this->email;
    }
}
