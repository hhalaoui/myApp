<?php
/**
 * Created by IntelliJ IDEA.
 * User: habib.hallaoui
 * Date: 23/03/2017
 * Time: 10:47
 */

namespace BackEnd\AdminBundle\Implementation;

use BackEnd\AdminBundle\Entity\Region;
use BackEnd\AdminBundle\Entity\TypeCompany;
use BackEnd\AdminBundle\InterfaceDAO\CompanyInterface;

abstract class CompanyImp implements CompanyInterface
{
    private $name;
    private $idCompany;
    private $idTypeCompany;
    private $idPlace;

    public function __construct($name, $idCompany, TypeCompany $idTypeCompany, Region $idPlace)
    {
        $this->name = $name;
        $this->idCompany = $idCompany;
        $this->idTypeCompany = $idTypeCompany;
        $this->idPlace = $idPlace;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getIdCompany()
    {
        return $this->idCompany;
    }

    /**
     * @param int $idCompany
     */
    public function setIdCompany($idCompany)
    {
        $this->idCompany = $idCompany;
    }

    /**
     * @return TypeCompany
     */
    public function getIdTypeCompany()
    {

        return $this->idTypeCompany;
    }

    /**
     * @param TypeCompany $idTypeCompany
     */
    public function setIdTypeCompany($idTypeCompany)
    {
        $this->idTypeCompany = $idTypeCompany;
    }

    /**
     * @return Region
     */
    public function getIdPlace()
    {
        return $this->idPlace;
    }

    /**
     * @param Region $idPlace
     */
    public function setIdPlace($idPlace)
    {
        $this->idPlace = $idPlace;
    }

}