<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table = 'teams';

    potected $fillable =[
      'name',
      'introduction',
    ];

    public function user()
    {
      return $this->hasMany(User::class);
    }
}
