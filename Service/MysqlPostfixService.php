<?php

namespace TroisSix\MysqlPostfixBundle\Service;

use Doctrine\ORM\EntityManager;

class MysqlPostfixService
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