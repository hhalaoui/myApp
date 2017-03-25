<?php

namespace BackEnd\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeCompany
 *
 * @ORM\Table(name="type_company", indexes={@ORM\Index(name="FK_REFERENCE_7", columns={"id_company"})})
 * @ORM\Entity
 */
class TypeCompany
{
    /**
     * @var string
     *
     * @ORM\Column(name="type_company", type="string", length=100, nullable=true)
     */
    private $typeCompany;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_type_company", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTypeCompany;

    /**
     * @var \BackEnd\AdminBundle\Entity\Company
     *
     * @ORM\ManyToOne(targetEntity="BackEnd\AdminBundle\Entity\Company")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_company", referencedColumnName="id_company")
     * })
     */
    private $idCompany;


}

