<?php

namespace App\Src\entity;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = 'suppliers';

    public function supplierAddresses(){
        return $this->hasMany('App\Src\entity\SupplierAddress');
    }

    public function itemSupplier(){
        return $this->hasMany('App\Src\entity\ItemSupplier');
    }
}
