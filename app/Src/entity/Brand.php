<?php

namespace App\Src\entity;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'brands';

    public function inventoryItem(){
        return $this->hasMany('App\Src\entity\InventoryItem');
    }
}
