<?php

namespace Blog\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Post
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Post extends Timestampable
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=150)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="body", type="text")
     * @Assert\NotBlank
     */
    private $body;
    /**
     * @var Author
     *
     * @ORM\ManyToOne(targetEntity="Author", inversedBy="posts")
     * @ORM\JoinColumn(name="author_id", referencedColumnName="id", nullable=false)
     */
    private $author;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createAt", type="datetime")
     * @Assert\NotBlank
     */
    private $createAt;
    public function __construct()
    {
        $this->createAt = new \DateTime();
    }
    /**
     * Get id
     *
     * @return integer
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
     * Set body
     *
     * @param string $body
     *
     * @return Post
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }
    /**
     * Get body
     *
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }
    /**
     * Set createAt
     *
     * @param \DateTime $createAt
     * @return Post
     */
    public function setCreateAt($createAt)
    {
        $this->createAt = $createAt;

        return $this;
    }
    /**
     * Get createAt
     *
     * @return \DateTime
     */
    public function getCreateAt()
    {
        return $this->createAt;
    }
    /**
     * Set author
     *
     * @param \Blog\ModelBundle\Entity\Author $author
     *
     * @return Post
     */
    public function setAuthor(\Blog\ModelBundle\Entity\Author $author)
    {
        $this->author = $author;

        return $this;
    }
    /**
     * Get author
     *
     * @return \Blog\ModelBundle\Entity\Author
     */
    public function getAuthor()
    {
        return $this->author;
    }
}
