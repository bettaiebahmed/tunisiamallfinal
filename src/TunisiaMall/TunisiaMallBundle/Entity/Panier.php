<?php

namespace TunisiaMall\TunisiaMallBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Panier
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Panier
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
     * @var integer
     *
     * @ORM\Column(name="nbreProduit", type="integer")
     */
    private $nbreProduit;


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
     * Set nbreProduit
     *
     * @param integer $nbreProduit
     * @return Panier
     */
    public function setNbreProduit($nbreProduit)
    {
        $this->nbreProduit = $nbreProduit;

        return $this;
    }

    /**
     * Get nbreProduit
     *
     * @return integer 
     */
    public function getNbreProduit()
    {
        return $this->nbreProduit;
    }
}
