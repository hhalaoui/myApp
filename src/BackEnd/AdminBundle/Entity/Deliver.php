<?php

namespace BackEnd\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Deliver
 *
 * @ORM\Table(name="deliver")
 * @ORM\Entity
 */
class Deliver
{
    /**
     * @var string
     *
     * @ORM\Column(name="NAME", type="string", length=100, nullable=true)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_deliver", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDeliver;


}

