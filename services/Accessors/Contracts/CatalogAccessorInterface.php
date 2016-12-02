<?php

namespace services\Accessors\Contracts;

use services\DataContracts\Catalog;

interface CatalogAccessorInterface
{
    public function getCatalogsForSchool(int $schoolId) : array;

    public function getCatalogById(int $catalogId) : Catalog;
}