<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Character extends Model
{
    use Notifiable;

    protected $guarded = ['id'];

    public function user(){
        return $this->belongsTo(User:class);
    }

    public function factions(){
        return $this->belongsToMany(Faction::class);
    }
}
