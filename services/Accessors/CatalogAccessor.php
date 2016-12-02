<?php

namespace services\Accessors;

use services\Accessors\Contracts\CatalogAccessorInterface;
use services\DataContracts\School;
use services\DataContracts\Catalog;

class CatalogAccessor implements CatalogAccessorInterface
{
    public function getCatalogsForSchool(int $schoolId) : array {
        return School::find($schoolId)->catalogs();
    }

    public function getCatalogById(int $catalogId) : Catalog {
        return School::find($catalogId);
    }

}