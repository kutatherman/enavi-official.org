<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $guarded = [];
    protected $table = 'staff';

    public function user()
    {
        return $this->hasMany(User::class)->orderBy('created_at', 'DESC');
    }

    public function getRouteKeyName()
    {
        //return 'name';
    }
}
