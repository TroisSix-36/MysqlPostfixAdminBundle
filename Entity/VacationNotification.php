<?php

namespace TroisSix\MysqlPostfixAdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VacationNotification
 *
 * @ORM\Table(name="vacation_notification", indexes={@ORM\Index(name="IDX_5DD977244C96696A", columns={"on_vacation"})})
 * @ORM\Entity
 */
class VacationNotification
{
    /**
     * @var string
     *
     * @ORM\Column(name="notified", type="string", length=255, nullable=false)
     * @ORM\Id
     */
    private $notified;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="notified_at", type="datetime", nullable=false)
     */
    private $notifiedAt;

    /**
     * @var Vacation
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Vacation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="on_vacation", referencedColumnName="email")
     * })
     */
    private $onVacation;

    /**
     * VacationNotification constructor.
     */
    public function __construct()
    {
        $this->notifiedAt = new \DateTime();
    }

    /**
     * @return string
     */
    public function getNotified()
    {
        return $this->notified;
    }

    /**
     * @param string $notified
     *
     * @return VacationNotification
     */
    public function setNotified($notified)
    {
        $this->notified = $notified;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getNotifiedAt()
    {
        return $this->notifiedAt;
    }

    /**
     * @param \DateTime $notifiedAt
     *
     * @return VacationNotification
     */
    public function setNotifiedAt($notifiedAt)
    {
        $this->notifiedAt = $notifiedAt;
        return $this;
    }

    /**
     * @return Vacation
     */
    public function getOnVacation()
    {
        return $this->onVacation;
    }

    /**
     * @param Vacation $onVacation
     *
     * @return VacationNotification
     */
    public function setOnVacation($onVacation)
    {
        $this->onVacation = $onVacation;
        return $this;
    }
}
