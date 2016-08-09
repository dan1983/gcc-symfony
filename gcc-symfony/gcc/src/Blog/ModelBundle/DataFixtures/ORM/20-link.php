<?php

namespace ModelBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Blog\ModelBundle\Entity\Link;


class Img extends AbstractFixture implements OrderedFixtureInterface {

  /**
  * {@inheritDoc}
  */

  public function getOrder() {

      return 20;

  }

    public function load(ObjectManager $manager) {

        $link = new link();
        $idPost = $this->getReference('link');
        $link->setIdPost($idPost);
        $link->setUrl('url_1');

        $link2 = new link();
        $idPost = $this->getReference('link2');
        $link2->setIdPost($idPost);
        $link2->setUrl('url_2');


        $link3 = new link();
        $idPost3 = $this->getReference('link3');
        $link3->setIdPost($idPost3);
        $link3->setUrl('url_2');

        $link4 = new link();
        $idPost4 = $this->getReference('link4');
        $link4->setIdPost($idPost4);
        $link4->setUrl('url_4');



        $manager->persist($link);
        $manager->persist($link2);
        $manager->persist($link3);
        $manager->persist($link4);

        $manager->flush();

  }
}
