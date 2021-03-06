<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'body', 'user_id','slug','update_at'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
