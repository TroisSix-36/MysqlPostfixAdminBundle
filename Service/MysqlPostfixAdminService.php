<?php

namespace TroisSix\MysqlPostfixAdminBundle\Service;

use Doctrine\ORM\EntityManager;
use TroisSix\MysqlPostfixAdminBundle\Entity\Alias;
use TroisSix\MysqlPostfixAdminBundle\Entity\Domain;
use TroisSix\MysqlPostfixAdminBundle\Entity\Mailbox;

class MysqlPostfixAdminService
{
    /**
     * @var EntityManager
     */
    private $em;

    /**
     * @param EntityManager $entityManager
     */
    public function __construct(EntityManager $entityManager)
    {
        $this->em = $entityManager;
    }

    /**
     * @param Domain $domain
     */
    public function saveDomain(Domain $domain)
    {
        $this->em->persist($domain);
        $this->em->flush($domain);
    }

    /**
     * @param Alias $alias
     */
    public function saveAlias(Alias $alias)
    {
        $this->em->persist($alias);
        $this->em->flush($alias);
    }

    /**
     * @param Mailbox $mailbox
     */
    public function saveMailbox(Mailbox $mailbox)
    {
        $this->em->persist($mailbox);
        $this->em->flush($mailbox);
    }
}