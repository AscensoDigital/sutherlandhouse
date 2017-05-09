<?php
/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 03-05-17
 * Time: 12:11
 */

namespace AppBundle\Repository;


use Doctrine\ORM\EntityRepository;

class PromocionRepository extends EntityRepository
{
    public function doSelectActivos(){
        return $this->getQueryBuilderActivos()
            ->getQuery()->getResult();
    }

    public function doSelectPortada(){
        return $this->getQueryBuilderActivos()
            ->andWhere('pr.portada=:enPortada')
            ->setParameter(':enPortada','true')
            ->getQuery()->getResult();
    }

    public function getQueryBuilderActivos(){
        return $this->createQueryBuilder('pr')
            ->where('pr.fechaInicio<=:now')
            ->andWhere('pr.fechaTermino>:now')
            ->setParameter(':now','now');
    }
}