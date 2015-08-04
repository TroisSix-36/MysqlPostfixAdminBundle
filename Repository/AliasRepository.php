<?php

namespace TroisSix\MysqlPostfixAdminBundle\Repository;

use Doctrine\ORM\EntityRepository;
use TroisSix\MysqlPostfixAdminBundle\Entity\Alias;

class AliasRepository extends EntityRepository
{
    /**
     * @param string $domain
     * @param bool|false $ignoreMailboxes
     * @return Alias[]
     */
    public function findByDomain($domain, $ignoreMailboxes = false)
    {
        $qb = $this
            ->createQueryBuilder('a')
            ->where('a.domain = :domain')
        ;

        if($ignoreMailboxes) {
            $qb->andWhere('a.address != a.goto');
        }

        $qb->orderBy('a.address', 'ASC')
            ->setParameter('domain', $domain);

        return $qb->getQuery()->getResult();
    }
}
