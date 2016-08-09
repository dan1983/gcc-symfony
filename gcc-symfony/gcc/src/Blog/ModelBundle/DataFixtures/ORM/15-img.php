<?php

namespace ModelBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Blog\ModelBundle\Entity\Img;


class Images  extends AbstractFixture implements OrderedFixtureInterface {
  /**
  * {@inheritDoc}
  */
 public function getOrder()
 {
     return 15;
 }
 /**
 * {@inheritDoc}
 */
 public function load(ObjectManager $manager) {

   $pl_2 = new Img();
   $idPost = $this->getReference('img');
   $pl_2->setPostId($idPost);
   $pl_2->setImgPath('url');

   $idPost = $this->getReference('img');
   $pl_3 = new Img();
   $pl_3->setPostId($idPost);
   $pl_3->setImgPath('url_1');







   $pl_4 = new Img();
   $idPost2 = $this->getReference('80-c.jpg');
   $pl_4->setPostId($idPost2);
   $pl_4->setImgPath('url_2');


   $pl_5 = new Img();
   $idPost3 = $this->getReference('90-c.jpg');
   $pl_5->setPostId($idPost3);
   $pl_5->setImgPath('url_3');


   $pl_6 = new Img();
   $idPost4 = $this->getReference('streamer-c.jpg');
   $pl_6->setPostId($idPost4);
   $pl_6->setImgPath('url_4');


   $manager->persist($pl_2);
   $manager->persist($pl_3);
   $manager->persist($pl_4);
   $manager->persist($pl_5);
   $manager->persist($pl_6);

   $manager->flush();

}



}
