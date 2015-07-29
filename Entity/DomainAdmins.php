<?php

namespace TroisSix\MysqlPostfixAdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DomainAdmins
 *
 * @ORM\Table(name="domain_admins")
 * @ORM\Entity
 */
class DomainAdmins
{
    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255, nullable=false)
     * @ORM\Id
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="domain", type="string", length=255, nullable=false)
     * @ORM\Id
     */
    private $domain;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=false)
     */
    private $created = '0000-00-00 00:00:00';

    /**
     * @var boolean
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active = '1';


}
