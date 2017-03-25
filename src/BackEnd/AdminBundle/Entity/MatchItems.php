<?php

namespace BackEnd\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MatchItems
 *
 * @ORM\Table(name="match_items", indexes={@ORM\Index(name="FK_REFERENCE_10", columns={"id_item"})})
 * @ORM\Entity
 */
class MatchItems
{
    /**
     * @var string
     *
     * @ORM\Column(name="status_match_item", type="string", length=50, nullable=true)
     */
    private $statusMatchItem;

    /**
     * @var float
     *
     * @ORM\Column(name="amount_to_paied", type="float", precision=10, scale=0, nullable=true)
     */
    private $amountToPaied;

    /**
     * @var string
     *
     * @ORM\Column(name="transaction_status", type="string", length=15, nullable=true)
     */
    private $transactionStatus;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_match", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMatch;

    /**
     * @var \BackEnd\AdminBundle\Entity\Item
     *
     * @ORM\ManyToOne(targetEntity="BackEnd\AdminBundle\Entity\Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_item", referencedColumnName="id_item")
     * })
     */
    private $idItem;


}

