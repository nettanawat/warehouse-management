<?php

namespace App\Src\entity;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = 'suppliers';

    public function supplierAddress(){
        return $this->hasOne('App\Src\entity\SupplierAddress', 'suppliers_id');
    }

    public function itemSupplier(){
        return $this->hasMany('App\Src\entity\ItemSupplier', 'suppliers_id');
    }
}
