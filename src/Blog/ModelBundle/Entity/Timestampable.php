<?php
/**
 * Created by PhpStorm.
 * User: vladimiro.agudo
 * Date: 19/11/14
 * Time: 12:19
 */
namespace Blog\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Timestampable clase abstracta para definir su comportamiento
 * @ORM\MappedSuperClass
 */
abstract class Timestampable{
    /**
    * @var \DateTime
    * @ORM\Column(name="createAt", type="datetime")
    * @Assert\NotBlank
    */
    private $createAt;

    public function __construct()
    {
        $this->createAt = new \DateTime();
    }
    /**
     * Set createAt
     *
     * @param \DateTime $createAt
     *
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
}