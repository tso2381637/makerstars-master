<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teamup extends Model
{
    protected $table = "teamup";

    public $timestamps = false;

    protected $fillable = [
        'id',
        'team_id',
        'user_id'
    ];

}
