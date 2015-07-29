<?php

namespace TroisSix\MysqlPostfixBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Quota
 *
 * @ORM\Table(name="quota")
 * @ORM\Entity
 */
class Quota
{
    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=100, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $path;

    /**
     * @var integer
     *
     * @ORM\Column(name="current", type="bigint", nullable=true)
     */
    private $current;


}
