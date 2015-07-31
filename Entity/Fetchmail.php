<?php

namespace TroisSix\MysqlPostfixAdminBundle\Entity;

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
    private $keep = false;

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
    private $usessl = false;

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
    private $date;

    /**
     * Fetchmail constructor.
     */
    public function __construct()
    {
        $this->date = new \DateTime();
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return Fetchmail
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getMailbox()
    {
        return $this->mailbox;
    }

    /**
     * @param string $mailbox
     *
     * @return Fetchmail
     */
    public function setMailbox($mailbox)
    {
        $this->mailbox = $mailbox;
        return $this;
    }

    /**
     * @return string
     */
    public function getSrcServer()
    {
        return $this->srcServer;
    }

    /**
     * @param string $srcServer
     *
     * @return Fetchmail
     */
    public function setSrcServer($srcServer)
    {
        $this->srcServer = $srcServer;
        return $this;
    }

    /**
     * @return string
     */
    public function getSrcAuth()
    {
        return $this->srcAuth;
    }

    /**
     * @param string $srcAuth
     *
     * @return Fetchmail
     */
    public function setSrcAuth($srcAuth)
    {
        $this->srcAuth = $srcAuth;
        return $this;
    }

    /**
     * @return string
     */
    public function getSrcUser()
    {
        return $this->srcUser;
    }

    /**
     * @param string $srcUser
     *
     * @return Fetchmail
     */
    public function setSrcUser($srcUser)
    {
        $this->srcUser = $srcUser;
        return $this;
    }

    /**
     * @return string
     */
    public function getSrcPassword()
    {
        return $this->srcPassword;
    }

    /**
     * @param string $srcPassword
     *
     * @return Fetchmail
     */
    public function setSrcPassword($srcPassword)
    {
        $this->srcPassword = $srcPassword;
        return $this;
    }

    /**
     * @return string
     */
    public function getSrcFolder()
    {
        return $this->srcFolder;
    }

    /**
     * @param string $srcFolder
     *
     * @return Fetchmail
     */
    public function setSrcFolder($srcFolder)
    {
        $this->srcFolder = $srcFolder;
        return $this;
    }

    /**
     * @return int
     */
    public function getPollTime()
    {
        return $this->pollTime;
    }

    /**
     * @param int $pollTime
     *
     * @return Fetchmail
     */
    public function setPollTime($pollTime)
    {
        $this->pollTime = $pollTime;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isFetchall()
    {
        return $this->fetchall;
    }

    /**
     * @param boolean $fetchall
     *
     * @return Fetchmail
     */
    public function setFetchall($fetchall)
    {
        $this->fetchall = $fetchall;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isKeep()
    {
        return $this->keep;
    }

    /**
     * @param boolean $keep
     *
     * @return Fetchmail
     */
    public function setKeep($keep)
    {
        $this->keep = $keep;
        return $this;
    }

    /**
     * @return string
     */
    public function getProtocol()
    {
        return $this->protocol;
    }

    /**
     * @param string $protocol
     *
     * @return Fetchmail
     */
    public function setProtocol($protocol)
    {
        $this->protocol = $protocol;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isUsessl()
    {
        return $this->usessl;
    }

    /**
     * @param boolean $usessl
     *
     * @return Fetchmail
     */
    public function setUsessl($usessl)
    {
        $this->usessl = $usessl;
        return $this;
    }

    /**
     * @return string
     */
    public function getExtraOptions()
    {
        return $this->extraOptions;
    }

    /**
     * @param string $extraOptions
     *
     * @return Fetchmail
     */
    public function setExtraOptions($extraOptions)
    {
        $this->extraOptions = $extraOptions;
        return $this;
    }

    /**
     * @return string
     */
    public function getReturnedText()
    {
        return $this->returnedText;
    }

    /**
     * @param string $returnedText
     *
     * @return Fetchmail
     */
    public function setReturnedText($returnedText)
    {
        $this->returnedText = $returnedText;
        return $this;
    }

    /**
     * @return string
     */
    public function getMda()
    {
        return $this->mda;
    }

    /**
     * @param string $mda
     *
     * @return Fetchmail
     */
    public function setMda($mda)
    {
        $this->mda = $mda;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param \DateTime $date
     *
     * @return Fetchmail
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }
}
