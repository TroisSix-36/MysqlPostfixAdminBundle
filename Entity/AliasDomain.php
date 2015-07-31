<?php

namespace TroisSix\MysqlPostfixAdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AliasDomain
 *
 * @ORM\Table(name="alias_domain", indexes={@ORM\Index(name="active", columns={"active"}), @ORM\Index(name="target_domain", columns={"target_domain"})})
 * @ORM\Entity
 */
class AliasDomain
{
    /**
     * @var string
     *
     * @ORM\Column(name="alias_domain", type="string", length=255, nullable=false)
     * @ORM\Id
     */
    private $aliasDomain;

    /**
     * @var string
     *
     * @ORM\Column(name="target_domain", type="string", length=255, nullable=false)
     */
    private $targetDomain;

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
     * AliasDomain constructor.
     */
    public function __construct()
    {
        $this->created = new \DateTime();
        $this->modified = new \DateTime();
    }

    /**
     * @return string
     */
    public function getAliasDomain()
    {
        return $this->aliasDomain;
    }

    /**
     * @param string $aliasDomain
     *
     * @return AliasDomain
     */
    public function setAliasDomain($aliasDomain)
    {
        $this->aliasDomain = $aliasDomain;
        return $this;
    }

    /**
     * @return string
     */
    public function getTargetDomain()
    {
        return $this->targetDomain;
    }

    /**
     * @param string $targetDomain
     *
     * @return AliasDomain
     */
    public function setTargetDomain($targetDomain)
    {
        $this->targetDomain = $targetDomain;
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
     * @return AliasDomain
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
     * @return AliasDomain
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
     * @return AliasDomain
     */
    public function setActive($active)
    {
        $this->active = $active;
        return $this;
    }
}
