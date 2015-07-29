<?php

namespace TroisSix\MysqlPostfixAdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mailbox
 *
 * @ORM\Table(name="mailbox", indexes={@ORM\Index(name="domain", columns={"domain"})})
 * @ORM\Entity
 */
class Mailbox
{
    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="maildir", type="string", length=255, nullable=false)
     */
    private $maildir;

    /**
     * @var integer
     *
     * @ORM\Column(name="quota", type="bigint", nullable=false)
     */
    private $quota = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="local_part", type="string", length=255, nullable=false)
     */
    private $localPart;

    /**
     * @var string
     *
     * @ORM\Column(name="domain", type="string", length=255, nullable=false)
     */
    private $domain;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=false)
     */
    private $created = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modified", type="datetime", nullable=false)
     */
    private $modified = '0000-00-00 00:00:00';

    /**
     * @var boolean
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active = '1';


}
