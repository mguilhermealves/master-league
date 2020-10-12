<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'initials', 'nation_id', 'user_id'
    ];

    public function Nationality()
    {
        return $this->hasOne(Nationality::class, 'nation_id');
    }
}
