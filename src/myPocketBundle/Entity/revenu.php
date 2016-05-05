<?php

namespace myPocketBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * revenu
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="myPocketBundle\Entity\revenuRepository")
 */
class revenu
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
     * @ORM\Column(name="iduser", type="integer")
     */
    private $iduser;

    /**
    * @ORM\ManyToOne(targetEntity="categorie", inversedBy="revenu")
    * @ORM\JoinColumn(name="categorie_id", referencedColumnName="id")
    */
    protected $categorie;
    
     /**
     * Set categorie
     *
     * @param \myPocketBundle\Entity\categorie $categorie
     * @return revenu
     */
    public function setCategorie(\myPocketBundle\Entity\categorie $categorie = null)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \myPocketBundle\Entity\categorie 
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="designation", type="string", length=255)
     */
    private $designation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;
    
    /**
     * @var float
     *
     * @ORM\Column(name="montant", type="float")
     */
    private $montant;

    /**
     * @var integer
     *
     * @ORM\Column(name="deleted", type="integer")
     */
    private $deleted;


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
     * Set iduser
     *
     * @param integer $iduser
     * @return revenu
     */
    public function setIduser($iduser)
    {
        $this->iduser = $iduser;

        return $this;
    }

    /**
     * Get iduser
     *
     * @return integer 
     */
    public function getIduser()
    {
        return $this->iduser;
    }

    
    /**
     * Set montant
     *
     * @param float $montant
     * @return depense
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return float 
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set designation
     *
     * @param string $designation
     * @return revenu
     */
    public function setDesignation($designation)
    {
        $this->designation = $designation;

        return $this;
    }

    /**
     * Get designation
     *
     * @return string 
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return revenu
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set deleted
     *
     * @param integer $deleted
     * @return revenu
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;

        return $this;
    }

    /**
     * Get deleted
     *
     * @return integer 
     */
    public function getDeleted()
    {
        return $this->deleted;
    }
}
