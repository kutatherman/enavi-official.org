<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teams extends Model
{
    protected $guarded = [];
    protected $table = 'teams';

    public function user()
    {
        return $this->hasMany(User::class)->orderBy('created_at', 'DESC');
    }

    public function getRouteKeyName()
    {
        //return 'name';
    }
}
