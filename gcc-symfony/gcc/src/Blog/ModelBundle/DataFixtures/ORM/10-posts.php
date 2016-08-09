<?php

namespace ModelBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Blog\ModelBundle\Entity\Post;
use Blog\ModelBundle\Entity\Img;


class Posts  extends AbstractFixture implements OrderedFixtureInterface {

    /**
    * {@inheritDoc}
    */
   public function getOrder()
   {
       return 10;
   }

   /**
   * {@inheritDoc}
   */
   public function load(ObjectManager $manager) {

      $pl = new Post();
      $pl->setTitle('al carajo');
      $pl->setContent('body');
      $pl->setDateAt(New \DateTime());
      $manager->persist($pl);
      $manager->flush();
      $this->addReference('img',$pl);
      $this->addReference('link',$pl);



      $pl2 = new Post();
      $pl2->setTitle('segundo post');
      $pl2->setContent('body');
      $pl2->setDateAt(New \DateTime());
      $manager->persist($pl2);
      $manager->flush();
      $this->addReference('img2',$pl2);
      $this->addReference('link2',$pl2);



      $pl3 = new Post();
      $pl3->setTitle('tercer post');
      $pl3->setContent('body');
      $pl3->setDateAt(New \DateTime());
      $manager->persist($pl3);
      $manager->flush();
      $this->addReference('img3',$pl3);
      $this->addReference('link3',$pl3);



      $pl4 = new Post();
      $pl4->setTitle('cuarto post');
      $pl4->setContent('body');
      $pl4->setDateAt(New \DateTime());
      $manager->persist($pl4);
      $manager->flush();
      $this->addReference('img4',$pl4);
      $this->addReference('link4',$pl4);




}




}
