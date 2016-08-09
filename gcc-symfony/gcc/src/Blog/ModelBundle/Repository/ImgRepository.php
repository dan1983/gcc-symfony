<?php

namespace Blog\ModelBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * ImgRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ImgRepository extends EntityRepository
{

public function queryLatestImg($postId) {

  $query = $this->getEntityManager()
             ->createQuery('
                 SELECT i
                 FROM ModelBundle:Img i
                 WHERE i.post <= :post
                 ORDER BY i.id DESC')->setParameter('post',$postId );

  $result = $query->setMaxResults(1)->getOneOrNullResult();
  return $result;

  }
}
