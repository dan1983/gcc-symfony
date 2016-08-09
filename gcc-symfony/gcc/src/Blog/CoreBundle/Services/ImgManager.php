<?php

namespace Blog\CoreBundle\Services;

use Blog\ModelBundle\Entity\Img;
use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpKernel\Exception\NotFoundExcetion;


class ImgManager
{
    private $em;
    /*
    * @param EntityMananger $em
    */

    public function __construct(EntityManager $em) {

        $this->em = $em;
    }

    public function getLastImg($postId) {
      
        return $this->em->getRepository('ModelBundle:Img')->findOneBy(
            array('post'=>$postId),
            array('id' => 'DESC'));


    }

}
