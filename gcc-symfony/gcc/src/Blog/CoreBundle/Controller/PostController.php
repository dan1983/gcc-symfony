<?php

namespace Blog\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


class PostController extends Controller
{
    /**
     * @return array
     * @Route("/")
     * @Template()
     */
  public function indexAction()
    {
       $posts = $this->get('PostManager')->getAllPost();

        return $this->render('CoreBundle:Post:index.html.twig', array(
            'posts'=> $this->getPostData($posts)

        ));
      }

      public function getPostData($posts) {

            $postData = array();
            $i =1;
            foreach($posts as $post) {
                $postData[$i]= array(
                    'post'=>$post,
                    'img' => $this->get('ImgManager')->getLastImg($post->getId()));
                     $i++;
            }

          return $postData;


      }

}
