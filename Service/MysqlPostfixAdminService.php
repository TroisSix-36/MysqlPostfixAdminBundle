<?php

namespace TroisSix\MysqlPostfixAdminBundle\Service;

use Doctrine\ORM\EntityManager;
use TroisSix\MysqlPostfixAdminBundle\Entity\Domain;

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
}