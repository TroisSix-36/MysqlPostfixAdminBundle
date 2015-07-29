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
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $notified;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="notified_at", type="datetime", nullable=false)
     */
    private $notifiedAt = 'CURRENT_TIMESTAMP';

    /**
     * @var \Vacation
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Vacation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="on_vacation", referencedColumnName="email")
     * })
     */
    private $onVacation;


}
