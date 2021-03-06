<?php

namespace Blog\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Img
 *
 * @ORM\Table(name="img")
 * @ORM\Entity(repositoryClass="Blog\ModelBundle\Repository\ImgRepository")
 */
class Img
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
     *
      * @ORM\ManyToOne(targetEntity="Post", inversedBy="imgs")
      * @ORM\JoinColumn(name="id_post",referencedColumnName="id" ,nullable=false)
      *
     */
       private $post;

       /**
        * @var string
        *
        * @ORM\Column(name="img_path", type="string", length=255)
        */

    private $imgPath;


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_at", type="datetime")
     */
    private $dateAt;


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
     * Set postId
     *
     * @param integer $postId
     *
     * @return Img
     */
    public function setPostId($postId)
    {
        $this->postId = $postId;

        return $this;
    }

    /**
     * Get postId
     *
     * @return int
     */
    public function getPostId()
    {
        return $this->postId;
    }

    /**
     * Set imgPath
     *
     * @param string $imgPath
     *
     * @return Img
     */
    public function setImgPath($imgPath)
    {
        $this->imgPath = $imgPath;

        return $this;
    }

    /**
     * Get imgPath
     *
     * @return string
     */
    public function getImgPath()
    {
        return $this->imgPath;
    }

    /**
     * Set imgs
     *
     * @param \Blog\ModelBundle\Entity\Post $imgs
     *
     * @return Img
     */
    public function setImgs(\Blog\ModelBundle\Entity\Post $imgs)
    {
        $this->imgs = $imgs;

        return $this;
    }

    /**
     * Get imgs
     *
     * @return \Blog\ModelBundle\Entity\Post
     */
    public function getImgs()
    {
        return $this->imgs;
    }

    /**
     * Set post
     *
     * @param \Blog\ModelBundle\Entity\Post $post
     *
     * @return Img
     */
    public function setPost(\Blog\ModelBundle\Entity\Post $post)
    {
        $this->post = $post;

        return $this;
    }

    /**
     * Get post
     *
     * @return \Blog\ModelBundle\Entity\Post
     */
    public function getPost()
    {
        return $this->post;
    }

    /**
     * Set dateAt
     *
     * @param \DateTime $dateAt
     *
     * @return Img
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
}
