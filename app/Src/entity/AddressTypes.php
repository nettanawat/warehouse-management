<?php

namespace App\Src\entity;

use Illuminate\Database\Eloquent\Model;

class AddressTypes extends Model
{
    protected $table = 'address_types';

    public function supplierAddress(){
        return $this->hasMany('App\Src\entity\SupplierAddress', 'address_types_id');
    }
}
