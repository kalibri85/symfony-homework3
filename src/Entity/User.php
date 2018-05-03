<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    protected $id;
    /**
     * @ORM\Column(type="string")
     */
    private $website;
    /**
     * @ORM\Column(type="string")
     */
    private $linkedin;

    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * @return mixed
     */
    public function getLinkedin()
    {
        return $this->linkedin;
    }
    /**
     * @param mixed $website
     */
    public function setWebsite($website): void
    {
        $this->website = $website;
    }
    /**
     * @param mixed $linkedin
     */
    public function setLinkedin($linkedin): void
    {
        $this->linkedin= $linkedin;
    }
}