<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Scout\Searchable;
class User extends Authenticatable
{
    use Searchable;
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'avatar',
        'email',
        'google_id',
        'name',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
    public function searchableAs()
    {
        return 'posts_index';
    }
    public function ideas()
    {
        return $this->hasMany(Idea::class);
    }
}
