<?php
/**
 * Created by IntelliJ IDEA.
 * User: habib.hallaoui
 * Date: 23/03/2017
 * Time: 10:39
 */

namespace BackEnd\AdminBundle\InterfaceDAO;


use BackEnd\AdminBundle\Entity\Company;
use BackEnd\AdminBundle\Implementation\CompanyImp;

interface CompanyInterface
{


    public function getIdCompany();

    public function setIdCompany($idCompany);

    public function getIdTypeCompany();

    public function setIdTypeCompany($idTypeCompany);

    public function getIdPlace();

    public function setIdPlace($idPlace);


}