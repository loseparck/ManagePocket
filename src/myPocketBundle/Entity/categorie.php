<?php

namespace myPocketBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * categorie
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="myPocketBundle\Entity\categorieRepository")
 */
class categorie
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=255)
     */
    private $photo;

     /**
    * @ORM\OneToMany(targetEntity="revenu", mappedBy="categorie")
    */
    protected $revenu;
    
    
     /**
     * Add revenu
     *
     * @param \myPocketBundle\Entity\revenu $revenu
     * @return categorie
     */
    public function addRevenu(\myPocketBundle\Entity\revenu $revenu)
    {
        $this->revenu[] = $revenu;

        return $this;
    }
    
    /**
     * Get revenu
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRevenu()
    {
        return $this->revenu;
    }
    
    /**
    * @ORM\OneToMany(targetEntity="depense", mappedBy="categorie")
    */
    protected $depense;
    
    public function __construct()
    {
        $this->revenu = new ArrayCollection();
        $this->depense = new ArrayCollection();
    }
    
     /**
     * Add depense
     *
     * @param \myPocketBundle\Entity\depense $depense
     * @return categorie
     */
    public function addDepense(\myPocketBundle\Entity\depense $depense)
    {
        $this->depense[] = $depense;

        return $this;
    }
    
    /**
     * Get depense
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDepense()
    {
        return $this->revenu;
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
     * Set nom
     *
     * @param string $nom
     * @return categorie
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set photo
     *
     * @param string $photo
     * @return categorie
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string 
     */
    public function getPhoto()
    {
        return $this->photo;
    }
}
