<?php

namespace services\Accessors\Contracts;


interface SchoolAccessorInterface
{
    public function findSchoolById(int $schoolId) : School;

    public function findSchoolByName(string $schoolName) : School;
} 
