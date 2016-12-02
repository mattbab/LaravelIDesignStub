<?php

namespace services\Accessors;

use services\Accessors\Contracts\SchoolAccessorInteface;
use services\Accessors\DataContracts\School;

class SchoolAccessor implements SchoolAccessorInterface
{
    public function findSchoolById(int $schoolId) : School {
        return School::find($schoolId);
    }

    public function findSchoolByName(string $schoolName) : School {
        return School::where('name', 'LIKE', '%'.$schoolName.'%');
    }
}