<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{
    protected $table = 'ideas';
    

   // public $timestamps = false;

    protected $fillable = [
        'state',
        'title',
        'content',
        'banner_image',
        'featured',
        'private',
        'reviews',
        'views',
        'category_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }   

    public function idea_comments()
    {
        return $this->hasMany(IdeaComment::class);
    }
}
