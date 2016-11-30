<?php
/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 30-11-16
 * Time: 3:53
 */

namespace AppBundle\Repository;


use Doctrine\ORM\EntityRepository;

class PageCarouselRepository extends EntityRepository
{
    public function findByPagina($pagina) {
        return $this->createQueryBuilder('pc')
            ->addSelect('ct')
            ->addSelect('pr')
            ->join('pc.carouselTipo','ct')
            ->leftJoin('pc.promocion','pr')
            ->orderBy('pc.orden')
            ->where('pc.pagina=:pagina AND ((pc.promocion IS NULL and pc.activo=:activo) OR (pr.fechaInicio<=:fecha AND pr.fechaTermino>:fecha))')
            ->setParameter(':pagina',$pagina)
            ->setParameter(':activo','true')
            ->setParameter(':fecha',date('Y-m-d H:i:s'))
            ->getQuery()->getResult();
    }
}