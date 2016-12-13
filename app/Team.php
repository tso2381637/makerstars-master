<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Team extends Model
{
    protected $table = 'teams';

    protected $fillable =[
      'user_id',
      'name',
      'introduction',
      'enabled'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function teamup()
    {
        return $this->hasMany(Teamup::class);
    }
}
