<?php
/**
 * Created by JetBrains PhpStorm.
 * User: sam
 * Date: 8/24/13
 * Time: 4:19 AM
 * To change this template use File | Settings | File Templates.
 */

namespace Photograph\PhotoBundle\Entity;


class Message
{
    protected $name;
    protected $subject;
    protected $body;
    protected $email;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getSubject()
    {
        return $this->subject;
    }

    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function setBody($body)
    {
        $this->body = $body;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }
}