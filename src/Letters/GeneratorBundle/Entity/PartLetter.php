<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of class PartLetter
 * @author mathurin
 */
namespace Letters\GeneratorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="partletter")
 */
class PartLetter
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=200)
     */
    protected $type_letter;

    /**
     * @ORM\Column(type="string", length=200)
     */
    protected $type_part;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $nb_agrument;
    
    /**
     * @ORM\Column(type="text")
     */
    protected $part_text;

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
     * Set type_letter
     *
     * @param string $typeLetter
     * @return PartLetter
     */
    public function setTypeLetter($typeLetter)
    {
        $this->type_letter = $typeLetter;

        return $this;
    }

    /**
     * Get type_letter
     *
     * @return string 
     */
    public function getTypeLetter()
    {
        return $this->type_letter;
    }

    /**
     * Set type_part
     *
     * @param string $typePart
     * @return PartLetter
     */
    public function setTypePart($typePart)
    {
        $this->type_part = $typePart;

        return $this;
    }

    /**
     * Get type_part
     *
     * @return string 
     */
    public function getTypePart()
    {
        return $this->type_part;
    }

    /**
     * Set nb_agrument
     *
     * @param integer $nbAgrument
     * @return PartLetter
     */
    public function setNbAgrument($nbAgrument)
    {
        $this->nb_agrument = $nbAgrument;

        return $this;
    }

    /**
     * Get nb_agrument
     *
     * @return integer 
     */
    public function getNbAgrument()
    {
        return $this->nb_agrument;
    }

    /**
     * Set part_text
     *
     * @param string $partText
     * @return PartLetter
     */
    public function setPartText($partText)
    {
        $this->part_text = $partText;

        return $this;
    }

    /**
     * Get part_text
     *
     * @return string 
     */
    public function getPartText()
    {
        return $this->part_text;
    }
}
