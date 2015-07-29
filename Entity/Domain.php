<?php

namespace TroisSix\MysqlPostfixBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Domain
 *
 * @ORM\Table(name="domain")
 * @ORM\Entity
 */
class Domain
{
    /**
     * @var string
     *
     * @ORM\Column(name="domain", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $domain;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="aliases", type="integer", nullable=false)
     */
    private $aliases = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="mailboxes", type="integer", nullable=false)
     */
    private $mailboxes = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="maxquota", type="bigint", nullable=false)
     */
    private $maxquota = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="quota", type="bigint", nullable=false)
     */
    private $quota = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="transport", type="string", length=255, nullable=false)
     */
    private $transport;

    /**
     * @var boolean
     *
     * @ORM\Column(name="backupmx", type="boolean", nullable=false)
     */
    private $backupmx = '0';

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
