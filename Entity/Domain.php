<?php

namespace TroisSix\MysqlPostfixAdminBundle\Entity;

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
    private $backupmx = false;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=false)
     */
    private $created;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modified", type="datetime", nullable=false)
     */
    private $modified;

    /**
     * @var boolean
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active = true;

    /**
     * Domain constructor.
     */
    public function __construct()
    {
        $this->created = new \DateTime();
        $this->modified = new \DateTime();
    }

    /**
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * @param string $domain
     *
     * @return Domain
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return Domain
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return int
     */
    public function getAliases()
    {
        return $this->aliases;
    }

    /**
     * @param int $aliases
     *
     * @return Domain
     */
    public function setAliases($aliases)
    {
        $this->aliases = $aliases;
        return $this;
    }

    /**
     * @return int
     */
    public function getMailboxes()
    {
        return $this->mailboxes;
    }

    /**
     * @param int $mailboxes
     *
     * @return Domain
     */
    public function setMailboxes($mailboxes)
    {
        $this->mailboxes = $mailboxes;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxquota()
    {
        return $this->maxquota;
    }

    /**
     * @param int $maxquota
     *
     * @return Domain
     */
    public function setMaxquota($maxquota)
    {
        $this->maxquota = $maxquota;
        return $this;
    }

    /**
     * @return int
     */
    public function getQuota()
    {
        return $this->quota;
    }

    /**
     * @param int $quota
     *
     * @return Domain
     */
    public function setQuota($quota)
    {
        $this->quota = $quota;
        return $this;
    }

    /**
     * @return string
     */
    public function getTransport()
    {
        return $this->transport;
    }

    /**
     * @param string $transport
     *
     * @return Domain
     */
    public function setTransport($transport)
    {
        $this->transport = $transport;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isBackupmx()
    {
        return $this->backupmx;
    }

    /**
     * @param boolean $backupmx
     *
     * @return Domain
     */
    public function setBackupmx($backupmx)
    {
        $this->backupmx = $backupmx;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param \DateTime $created
     *
     * @return Domain
     */
    public function setCreated($created)
    {
        $this->created = $created;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getModified()
    {
        return $this->modified;
    }

    /**
     * @param \DateTime $modified
     *
     * @return Domain
     */
    public function setModified($modified)
    {
        $this->modified = $modified;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isActive()
    {
        return $this->active;
    }

    /**
     * @param boolean $active
     *
     * @return Domain
     */
    public function setActive($active)
    {
        $this->active = $active;
        return $this;
    }
}
