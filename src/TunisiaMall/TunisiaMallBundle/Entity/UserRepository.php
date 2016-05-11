<?php

namespace TunisiaMall\TunisiaMallBundle\Entity;

use Doctrine\ORM\EntityRepository;
use TunisiaMall\TunisiaMallBundle\Entity\CarteFidelite;



/**
 * CarteFidelite
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UserRepository extends EntityRepository
{
    public function valider_client($id)
    {
   $query=$this->getEntityManager()->createQuery("Update TunisiaMallBundle:User u SET u.valide='valide' where u.id=:id ");
      $query->setParameter('id',$id);
         $query->execute();
    }
    public function refuser_client($id)
    {
   $query=$this->getEntityManager()->createQuery("Update TunisiaMallBundle:User u SET u.valide='refuser' where u.id=:id ");
      $query->setParameter('id',$id);
         $query->execute();

    }
     public function getUserNumber()
    {
  return $this->createQueryBuilder('TunisiaMallBundle:User')
 ->select('COUNT(TunisiaMallBundle:User)')
 ->getQuery()
 ->getSingleScalarResult();
    }
}
