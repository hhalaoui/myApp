<?php

namespace BackEnd\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Item
 *
 * @ORM\Table(name="item", indexes={@ORM\Index(name="FK_REFERENCE_12", columns={"id_user"}), @ORM\Index(name="FK_REFERENCE_6", columns={"id_location_type"}), @ORM\Index(name="FK_REFERENCE_9", columns={"id_categroy"})})
 * @ORM\Entity
 */
class Item
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=true)
     */
    private $name;

    /**
     * @var float
     *
     * @ORM\Column(name="reward", type="float", precision=10, scale=0, nullable=true)
     */
    private $reward;

    /**
     * @var string
     *
     * @ORM\Column(name="picture", type="string", length=255, nullable=true)
     */
    private $picture;

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=255, nullable=true)
     */
    private $location;

    /**
     * @var string
     *
     * @ORM\Column(name="status_item", type="string", length=30, nullable=true)
     */
    private $statusItem;

    /**
     * @var string
     *
     * @ORM\Column(name="longitude", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $longitude;

    /**
     * @var string
     *
     * @ORM\Column(name="latitude", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $latitude;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=100, nullable=true)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=60, nullable=true)
     */
    private $country;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creation_date", type="datetime", nullable=true)
     */
    private $creationDate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="found_item", type="boolean", nullable=true)
     */
    private $foundItem;

    /**
     * @var boolean
     *
     * @ORM\Column(name="lost_item", type="boolean", nullable=true)
     */
    private $lostItem;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_of_lost", type="datetime", nullable=true)
     */
    private $dateOfLost;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_of_found", type="datetime", nullable=true)
     */
    private $dateOfFound;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_item", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idItem;

    /**
     * @var \BackEnd\AdminBundle\Entity\MainCategoryItem
     *
     * @ORM\ManyToOne(targetEntity="BackEnd\AdminBundle\Entity\MainCategoryItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_categroy", referencedColumnName="id_categroy")
     * })
     */
    private $idCategroy;

    /**
     * @var \BackEnd\AdminBundle\Entity\LocationType
     *
     * @ORM\ManyToOne(targetEntity="BackEnd\AdminBundle\Entity\LocationType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_location_type", referencedColumnName="id_location_type")
     * })
     */
    private $idLocationType;

    /**
     * @var \BackEnd\AdminBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="BackEnd\AdminBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id_user")
     * })
     */
    private $idUser;


}

