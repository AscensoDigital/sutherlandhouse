<?php
/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 09-05-17
 * Time: 16:30
 */

namespace AppBundle\Repository;


use Doctrine\ORM\EntityRepository;

class TemporadaRepository extends EntityRepository
{
    public function doSelectByActiva(){
        return $this->createQueryBuilder('tmp')
            ->addSelect('trf')
            ->addSelect('ht')
            ->join('tmp.tarifas','trf')
            ->join('trf.habitacionTipo','ht')
            ->where('tmp.activa=:activa')
            ->orderBy('trf.habitacionTipo')
            ->setParameter(':activa','true')
            ->getQuery()->getResult();
    }
}