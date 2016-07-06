<?php

namespace App\Src\entity;

use Illuminate\Database\Eloquent\Model;

class InventoryItem extends Model
{
    protected $table = 'inventory_items';

    public function itemSupplier(){
        return $this->hasMany('App\Src\entity\ItemSupplier');
    }

    public function customerItemPurchase(){
        return $this->hasMany('App\Src\entity\CustomerItemPurchase');
    }

    public function brand(){
        return $this->belongsTo('App\Src\entity\Brands', 'id');
    }

    public function inventoryType(){
        return $this->belongsTo('App\Src\entity\InventoryType', 'id');
    }

    public function itemUnit(){
        return $this->belongsTo('App\Src\entity\ItemUnit', 'id');
    }
}
