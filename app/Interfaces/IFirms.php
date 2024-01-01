<?php

namespace App\Interfaces;

interface IFirms
{
    public function getMainCompanies();
    public function getCompanies($search,$per_page,$parent_company_id);
    public function addCompany($company);
    public function updateCompany($company,$id);
    public function deleteCompany($id);
}
