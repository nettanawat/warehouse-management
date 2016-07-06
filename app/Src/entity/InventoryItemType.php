<?php

namespace App\App\Src\entity;

use Illuminate\Database\Eloquent\Model;

class InventoryItemType extends Model
{
    protected $table = 'inventory_item_types';

    public function supplier(){
        return $this->belongsTo('App\Src\entity\Supplier', 'id');
    }
}
