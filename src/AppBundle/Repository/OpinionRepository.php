<?php
/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 21-06-17
 * Time: 3:06
 */

namespace AppBundle\Repository;


use Doctrine\ORM\EntityRepository;

class OpinionRepository extends EntityRepository
{
    public function getValorizacionPromedio() {
        return $this->createQueryBuilder('op')
            ->select('AVG(op.valorizacion)')
            ->getQuery()->getSingleScalarResult();
    }
}