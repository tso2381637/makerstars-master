<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IdeaComment extends Model
{
    protected $table = 'idea_comments';

    protected $fillable = [
        'idea_id',
        'content',
    ];

    public function idea()
    {
        return $this->belongsTo(Idea::class);
    }
}
