<?php
/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 22-06-17
 * Time: 1:27
 */

namespace AppBundle\Repository;


use Doctrine\ORM\EntityRepository;

class GaleriaRepository extends EntityRepository
{
    public function findByPortada(){
        return $this->getQueryBuilderFindWithItem()
            ->where('gal.portada=:true')
            ->setParameter(':true','true')
            ->orderBy('gal.prioridad')
            ->getQuery()->getResult();
    }

    public function getQueryBuilderFindWithItem(){
        return $this->createQueryBuilder('gal')
            ->addSelect('galIt')
            ->join('gal.galeriaItem','galIt');
    }
}