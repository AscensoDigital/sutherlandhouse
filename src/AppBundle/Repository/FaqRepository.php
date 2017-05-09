<?php
/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 09-05-17
 * Time: 18:08
 */

namespace AppBundle\Repository;


use Doctrine\ORM\EntityRepository;

class FaqRepository extends EntityRepository
{
    public function doSelectSort() {
        return $this->createQueryBuilder('faq')
            ->orderBy('faq.orden')
            ->getQuery()->getResult();
    }
}