<?php

namespace TroisSix\MysqlPostfixBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Log
 *
 * @ORM\Table(name="log", indexes={@ORM\Index(name="timestamp", columns={"timestamp"})})
 * @ORM\Entity
 */
class Log
{

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timestamp", type="datetime", nullable=false)
     * @ORM\Id
     */
    private $timestamp = '0000-00-00 00:00:00';

    /**
     * @var string
     * @ORM\Column(name="username", type="string", length=255, nullable=false)
     * @ORM\Id
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="domain", type="string", length=255, nullable=false)
     */
    private $domain;

    /**
     * @var string
     *
     * @ORM\Column(name="action", type="string", length=255, nullable=false)
     * @ORM\Id
     */
    private $action;

    /**
     * @var string
     *
     * @ORM\Column(name="data", type="text", nullable=false)
     * @ORM\Id
     */
    private $data;

}
