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
     * @ORM\GeneratedValue(strategy="IDENTITY")
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
