<?php

namespace Blog\CoreBundle\Services;

use Blog\ModelBundle\Entity\Post;
use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpKernel\Exception\NotFoundExcetion;


class PostManager
{
    private $em;
    /*
    * @param EntityMananger $em
    */

    public function __construct(EntityManager $em) {

        $this->em = $em;
    }

    public function getAllPost() {

        return  $this->em->getRepository('ModelBundle:Post')->findAll();

    }

}
