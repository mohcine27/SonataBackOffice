<?php

namespace AppBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;

use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 *
 * @ORM\Table(name="category")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CategoryRepository")
 */
class Category
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

	/**
    * @ORM\ManyToMany(targetEntity="BlogPost", mappedBy="category")
    */
    private $blogPosts;

    public function __construct()
    {
        $this->blogPosts = new ArrayCollection();
    }

    public function getBlogPosts()
    {
        return $this->blogPosts;
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
     * Set name
     *
     * @param string $name
     * @return Category
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add blogPosts
     *
     * @param \AppBundle\Entity\BlogPost $blogPosts
     * @return Category
     */
    public function addBlogPost(\AppBundle\Entity\BlogPost $blogPosts)
    {
        $this->blogPosts[] = $blogPosts;
		

        return $this;
    }

    /**
     * Remove blogPosts
     *
     * @param \AppBundle\Entity\BlogPost $blogPosts
     */
    public function removeBlogPost(\AppBundle\Entity\BlogPost $blogPosts)
    {
        $this->blogPosts->removeElement($blogPosts);
    }
	
	public function __toString(){ return "".$this->name; }
}
