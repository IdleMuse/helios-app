<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeOfAsset extends Model
{
    protected $guarded = ['id'];

    public function asset(){
        return $this->belongsTo(Asset::class, 'id');
    }

    public function faction(){
        return $this->asset->faction();
    }
}
