<?php

namespace EJ\EvalBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="categorie")
 * @ORM\Entity(repositoryClass="EJ\EJEvalBundle\Entity\CategorieRepository")
 */

class Categorie
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $title;


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
     * @return Categorie
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
}

