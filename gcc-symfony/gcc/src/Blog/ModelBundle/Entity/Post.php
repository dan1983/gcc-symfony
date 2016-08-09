<?php

namespace Blog\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Post
 *
 * @ORM\Table(name="post")
 * @ORM\Entity(repositoryClass="Blog\ModelBundle\Repository\PostRepository")
 */
class Post
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="string", length=255)
     */
    private $content;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_at", type="datetime")
     */
    private $dateAt;

    /**
     *  @var ArrayCollection
     * @ORM\OneToMany(
     *      targetEntity="Link",
     *      mappedBy="post",
     *      cascade= {"remove"}
     * )
     *
     */

      private $links;

      /**
       * @var ArrayCollection
       *
       * @ORM\OneToMany(
       *      targetEntity="Img",
       *      mappedBy="post",
       *      cascade= {"remove"}
       * )
       *
       */

      private $imgs;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Post
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Post
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set dateAt
     *
     * @param \DateTime $dateAt
     *
     * @return Post
     */
    public function setDateAt($dateAt)
    {
        $this->dateAt = $dateAt;

        return $this;
    }

    /**
     * Get dateAt
     *
     * @return \DateTime
     */
    public function getDateAt()
    {
        return $this->dateAt;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->links = new \Doctrine\Common\Collections\ArrayCollection();
        $this->imgs = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add link
     *
     * @param \Blog\ModelBundle\Entity\Link $link
     *
     * @return Post
     */
    public function addLink(\Blog\ModelBundle\Entity\Link $link)
    {
        $this->links[] = $link;

        return $this;
    }

    /**
     * Remove link
     *
     * @param \Blog\ModelBundle\Entity\Link $link
     */
    public function removeLink(\Blog\ModelBundle\Entity\Link $link)
    {
        $this->links->removeElement($link);
    }

    /**
     * Get links
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * Add img
     *
     * @param \Blog\ModelBundle\Entity\Img $img
     *
     * @return Post
     */
    public function addImg(\Blog\ModelBundle\Entity\Img $img)
    {
        $this->imgs[] = $img;

        return $this;
    }

    /**
     * Remove img
     *
     * @param \Blog\ModelBundle\Entity\Img $img
     */
    public function removeImg(\Blog\ModelBundle\Entity\Img $img)
    {
        $this->imgs->removeElement($img);
    }

    /**
     * Get imgs
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getImgs()
    {
        return $this->imgs;
    }
}
