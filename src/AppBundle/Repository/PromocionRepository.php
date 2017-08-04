<?php
/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 03-05-17
 * Time: 12:11
 */

namespace AppBundle\Repository;


use AppBundle\Entity\Promocion;
use Doctrine\ORM\EntityRepository;

class PromocionRepository extends EntityRepository
{
    public function doSelectActivos(){
        $result = $this->getQueryBuilderActivos()->getQuery()->getResult();
        return $this->organizarResultado($result);
    }

    public function doSelectPortada(){
        $result = $this->getQueryBuilderActivos()
            ->andWhere('pr.portada=:enPortada')
            ->setParameter(':enPortada','true')
            ->getQuery()->getResult();
        return $this->organizarResultado($result);
    }

    public function getQueryBuilderActivos(){
        return $this->createQueryBuilder('pr')
            ->where('pr.fechaInicio<=:now')
            ->andWhere('pr.fechaTermino>:now')
            ->orderBy('pr.orden')
            ->setParameter(':now','now');
    }

    private function organizarResultado($result) {
        $ret['vertical']=array();
        $ret['horizontal']=array();

        /** @var Promocion $item */
        foreach ($result as $item) {
            if($item->isVertical()){
                $ret['vertical'][]=$item;
            }
            else {
                $ret['horizontal'][]=$item;
            }
        }
        return $ret;
    }
}