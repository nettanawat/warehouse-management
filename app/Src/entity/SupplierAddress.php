<?php

namespace App\Src\entity;

use Illuminate\Database\Eloquent\Model;

class SupplierAddress extends Model
{
    protected $table = 'supplier_addresses';
    
    public function supplier(){
        return $this->belongsTo('App\Src\entity\Supplier', 'suppliers_id');
    }

    public function addressType(){
        return $this->belongsTo('App\Src\entity\AddressTypes');
    }
}
