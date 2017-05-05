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

    public function getQueryBuilderActivos(){
        return $this->createQueryBuilder('pr')
            ->where('pr.fecha_inicio<=NOW')
            ->andWhere('pr.fecha_termino>NOW');
    }
}