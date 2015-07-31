<?php

namespace TroisSix\MysqlPostfixAdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Quota2
 *
 * @ORM\Table(name="quota2")
 * @ORM\Entity
 */
class Quota2
{
    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=100, nullable=false)
     * @ORM\Id
     */
    private $username;

    /**
     * @var integer
     *
     * @ORM\Column(name="bytes", type="bigint", nullable=false)
     */
    private $bytes = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="messages", type="integer", nullable=false)
     */
    private $messages = '0';

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     *
     * @return Quota2
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    /**
     * @return int
     */
    public function getBytes()
    {
        return $this->bytes;
    }

    /**
     * @param int $bytes
     *
     * @return Quota2
     */
    public function setBytes($bytes)
    {
        $this->bytes = $bytes;
        return $this;
    }

    /**
     * @return int
     */
    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * @param int $messages
     *
     * @return Quota2
     */
    public function setMessages($messages)
    {
        $this->messages = $messages;
        return $this;
    }
}
