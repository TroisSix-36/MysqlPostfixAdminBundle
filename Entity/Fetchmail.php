<?php

namespace TroisSix\MysqlPostfixBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fetchmail
 *
 * @ORM\Table(name="fetchmail")
 * @ORM\Entity
 */
class Fetchmail
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="mailbox", type="string", length=255, nullable=false)
     */
    private $mailbox;

    /**
     * @var string
     *
     * @ORM\Column(name="src_server", type="string", length=255, nullable=false)
     */
    private $srcServer;

    /**
     * @var string
     *
     * @ORM\Column(name="src_auth", type="string", nullable=true)
     */
    private $srcAuth;

    /**
     * @var string
     *
     * @ORM\Column(name="src_user", type="string", length=255, nullable=false)
     */
    private $srcUser;

    /**
     * @var string
     *
     * @ORM\Column(name="src_password", type="string", length=255, nullable=false)
     */
    private $srcPassword;

    /**
     * @var string
     *
     * @ORM\Column(name="src_folder", type="string", length=255, nullable=false)
     */
    private $srcFolder;

    /**
     * @var integer
     *
     * @ORM\Column(name="poll_time", type="integer", nullable=false)
     */
    private $pollTime = '10';

    /**
     * @var boolean
     *
     * @ORM\Column(name="fetchall", type="boolean", nullable=false)
     */
    private $fetchall = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="keep", type="boolean", nullable=false)
     */
    private $keep = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="protocol", type="string", nullable=true)
     */
    private $protocol;

    /**
     * @var boolean
     *
     * @ORM\Column(name="usessl", type="boolean", nullable=false)
     */
    private $usessl = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="extra_options", type="text", nullable=true)
     */
    private $extraOptions;

    /**
     * @var string
     *
     * @ORM\Column(name="returned_text", type="text", nullable=true)
     */
    private $returnedText;

    /**
     * @var string
     *
     * @ORM\Column(name="mda", type="string", length=255, nullable=false)
     */
    private $mda;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false)
     */
    private $date = 'CURRENT_TIMESTAMP';


}
