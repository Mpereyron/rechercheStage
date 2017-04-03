<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Company
 *
 * @ORM\Table(name="company")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CompanyRepository")
 */
class Company
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
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="logo", type="string", length=255)
     */
    private $logo;



    /**
     * @ORM\ManyToOne(targetEntity="Location", inversedBy="companies", cascade={"persist"})
     * @ORM\JoinColumn(name="locationId", referencedColumnName="id")
     */
     private $location;

    /**
     * @ORM\ManyToOne(targetEntity="Domain", inversedBy="companies", cascade={"persist"})
     * @ORM\JoinColumn(name="domainId", referencedColumnName="id")
     */
    private $domain;

    /**
     * @ORM\OneToMany(targetEntity="Tutor", mappedBy="company")
     */
    private $tutors;


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
     *
     * @return Company
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
     * Set description
     *
     * @param string $description
     *
     * @return Company
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
     * Set logo
     *
     * @param string $logo
     *
     * @return Company
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;
    
        return $this;
    }

    /**
     * Get logo
     *
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }


    public function getLocation()
    {
        return $this->location;
    }


    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * Set location
     *
     * @param \AppBundle\Entity\Location $location
     *
     * @return Company
     */
    public function setLocation(\AppBundle\Entity\Location $location = null)
    {
        $this->location = $location;
    
        return $this;
    }

    /**
     * Set domain
     *
     * @param \AppBundle\Entity\Domain $domain
     *
     * @return Company
     */
    public function setDomain(\AppBundle\Entity\Domain $domain = null)
    {
        $this->domain = $domain;
    
        return $this;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tutors = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add tutor
     *
     * @param \AppBundle\Entity\Tutor $tutor
     *
     * @return Company
     */
    public function addTutor(\AppBundle\Entity\Tutor $tutor)
    {
        $this->tutors[] = $tutor;
    
        return $this;
    }

    /**
     * Remove tutor
     *
     * @param \AppBundle\Entity\Tutor $tutor
     */
    public function removeTutor(\AppBundle\Entity\Tutor $tutor)
    {
        $this->tutors->removeElement($tutor);
    }

    /**
     * Get tutors
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTutors()
    {
        return $this->tutors;
    }

}
