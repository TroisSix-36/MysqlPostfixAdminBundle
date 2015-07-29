<?php

namespace TroisSix\MysqlPostfixBundle\Entity;

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
     * @ORM\GeneratedValue(strategy="IDENTITY")
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


}
