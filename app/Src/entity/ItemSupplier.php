<?php

namespace App\Src\entity;

use Illuminate\Database\Eloquent\Model;

class ItemSupplier extends Model
{
    protected $table = 'item_suppliers';

    public function supplier(){
        return $this->belongsTo('App\Src\entity\Supplier', 'id');
    }

    public function inventoryItem(){
        return $this->belongsTo('App\Src\entity\InventoryItem', 'id');
    }
}
