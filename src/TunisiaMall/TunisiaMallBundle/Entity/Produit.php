<?php

namespace TunisiaMall\TunisiaMallBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Produit
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
     * @ORM\Column(name="ref", type="string", length=255)
     */
    private $ref;

    /**
     * @var string
     *
     * @ORM\Column(name="nomProduit", type="string", length=255)
     */
    private $nomProduit;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=255)
     */
    private $description;
    /*  @ORM\OneToOne(targetEntity="Categorie", cascade={"remove"})
     * @ORM\JoinColumn(name="id_cat", referencedColumnName="id", onDelete="CASCADE"
      * 
     
      */
    private $id_cat;
    /**
     * @ORM\OneToOne(targetEntity="TunisiaMall\TunisiaMallBundle\Entity\Enseigne", cascade={"persist","remove"},mappedBy="TunisiaMall\TunisiaMallBundle\Entity\Produit")
     *  @ORM\JoinColumn(name="idenseigne", referencedColumnName="id")
     */
    private $idenseigne;
    /**
     * @var integer
     *
     * @ORM\Column(name="QuantiteStock", type="integer")
     */
    
    private $quantiteStock;
    /**
     * @ORM\OneToOne(targetEntity="TunisiaMall\TunisiaMallBundle\Entity\Media", cascade={"persist","remove"},mappedBy="TunisiaMall\TunisiaMallBundle\Entity\Produit")
     *  @ORM\JoinColumn(name="image", referencedColumnName="id")
     */
    private $image;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;


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
     * Set ref
     *
     * @param string $ref
     * @return Produit
     */
    public function setRef($ref)
    {
        $this->ref = $ref;

        return $this;
    }

    /**
     * Get ref
     *
     * @return string 
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * Set nomProduit
     *
     * @param string $nomProduit
     * @return Produit
     */
    public function setNomProduit($nomProduit)
    {
        $this->nomProduit = $nomProduit;

        return $this;
    }

    /**
     * Get nomProduit
     *
     * @return string 
     */
    public function getNomProduit()
    {
        return $this->nomProduit;
    }
     
    
    /**
     * Set description
     *
     * @param string $description
     * @return Produit
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set quantiteStock
     *
     * @param integer $quantiteStock
     * @return Produit
     */
    public function setQuantiteStock($quantiteStock)
    {
        $this->quantiteStock = $quantiteStock;

        return $this;
    }

    /**
     * Get quantiteStock
     *
     * @return integer 
     */
    public function getQuantiteStock()
    {
        return $this->quantiteStock;
    }

    /**
     * Set prix
     *
     * @param float $prix
     * @return Produit
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float 
     */
    public function getPrix()
    {
        return $this->prix;
    }
    /**
     * Set image
     *
     * @param \TunisiaMall\TunisiaMallBundle\Entity\Media $image
     * @return Produits
     */
    public function setImage(\TunisiaMall\TunisiaMallBundle\Entity\Media $image)
    {
        $this->image = $image;
        return $this;
    }
    function getId_cat() {
        return $this->id_cat;
    }

    function getIdenseigne() {
        return $this->idenseigne;
    }

    function setId_cat($id_cat) {
        $this->id_cat = $id_cat;
    }

    function setIdenseigne($idenseigne) {
        $this->idenseigne = $idenseigne;
    }

           /**
     * Get image
     *
     * @return \TunisiaMall\AdminBundle\Entity\Media 
     */
    public function getImage()
    {
        return $this->image;
    }
    
}
