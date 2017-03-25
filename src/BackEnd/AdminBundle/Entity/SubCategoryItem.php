<?php

namespace BackEnd\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SubCategoryItem
 *
 * @ORM\Table(name="sub_category_item", indexes={@ORM\Index(name="FK_REFERENCE_8", columns={"id_categroy"})})
 * @ORM\Entity
 */
class SubCategoryItem
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=true)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_sub_category", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSubCategory;

    /**
     * @var \BackEnd\AdminBundle\Entity\MainCategoryItem
     *
     * @ORM\ManyToOne(targetEntity="BackEnd\AdminBundle\Entity\MainCategoryItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_categroy", referencedColumnName="id_categroy")
     * })
     */
    private $idCategroy;


}

