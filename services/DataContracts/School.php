<?php

namespace services\DataContracts;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    public function catalogs()
    {
        $this.hasMany('services\Accessors\DataContracts\Catalog');
    }
}
