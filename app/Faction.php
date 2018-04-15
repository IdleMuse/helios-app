<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Faction extends Model
{
    use Notifiable;

    protected $guarded = ['id'];

    public function characters(){
        return $this->belongsToMany(Character::class);
    }

    public function assets(){
        return $this->hasMany(Asset::class);
    }
}
