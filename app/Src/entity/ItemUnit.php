<?php

namespace App\Src\entity;

use Illuminate\Database\Eloquent\Model;

class ItemUnit extends Model
{
    protected $table = 'item_units';

    public function supplier(){
        return $this->belongsTo('App\Src\entity\Supplier', 'id');
    }
}
