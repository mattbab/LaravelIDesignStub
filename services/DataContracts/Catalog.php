<?php

namespace services\DataContracts;

use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    public function school() : School
    {
        return $this->hasOne('services\Accessors\DataContracts\School');
    }

    public function products() : array
    {
        return $this->hasMany('services\Accessors\DataContracts\Product');
    }
}
