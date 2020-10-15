<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'overall', 'position_id', 'nation_id', 'user_id'
    ];

    public function nationality_player()
    {
        return $this->hasOne(Nationality::class, 'id', 'nation_id');
    }

    public function position_player()
    {
        return $this->hasOne(PlayerPosition::class, 'id', 'position_id');
    }
}
