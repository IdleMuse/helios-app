<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    protected $guarded = ['id'];

    public function faction(){
        return $this->belongsTo(Faction::class);
    }

    public function asset(){
        return $this->morphTo('asset', 'type', 'id', 'id');
    }
}
