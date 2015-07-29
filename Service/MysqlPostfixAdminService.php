<?php

namespace TroisSix\MysqlPostfixAdminBundle\Service;

use Doctrine\ORM\EntityManager;

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
}