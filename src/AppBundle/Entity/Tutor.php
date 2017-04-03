<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Tutor
 *
 * @ORM\Table(name="tutor")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TutorRepository")
 */
class Tutor
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
     * @ORM\Column(name="firstname", type="string", length=255)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=255)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @ORM\ManyToOne(targetEntity="Company", inversedBy="tutors")
     * @ORM\JoinColumn(name="companyId", referencedColumnName="id")
     */
    private $company;

    /**
     * @ORM\OneToMany(targetEntity="Announce", mappedBy="tutor")
     */
    private $announces;

    public function __construct()
    {
        $this->announces = new ArrayCollection();
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
     * Set firstname
     *
     * @param string $firstname
     *
     * @return Tutor
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    
        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return Tutor
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    
        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Tutor
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }


    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set company
     *
     * @param \AppBundle\Entity\Company $company
     *
     * @return Tutor
     */
    public function setCompany(\AppBundle\Entity\Company $company = null)
    {
        $this->company = $company;
    
        return $this;
    }

    /**
     * Add announce
     *
     * @param \AppBundle\Entity\Announce $announce
     *
     * @return Tutor
     */
    public function addAnnounce(\AppBundle\Entity\Announce $announce)
    {
        $this->announces[] = $announce;
    
        return $this;
    }

    /**
     * Remove announce
     *
     * @param \AppBundle\Entity\Announce $announce
     */
    public function removeAnnounce(\AppBundle\Entity\Announce $announce)
    {
        $this->announces->removeElement($announce);
    }

    /**
     * Get announces
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAnnounces()
    {
        return $this->announces;
    }
}
