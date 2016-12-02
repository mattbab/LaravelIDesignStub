<?php

namespace services\Managers\Contracts;

interface CatalogManagerInterface
{
    public function getSchoolCatalogs(int $schoolId) : array;

    public function getCatalog(int $catalogId) : array;
}