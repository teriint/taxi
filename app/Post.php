<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'p_o', 'body', 'user_id', 'p_p', 'val', 'phone', 'stat',
    ];
 
    public function owner()
    {
        return $this->belongsTo(User::class);
    }
 
    public function scopePublished($query)
    {
        return $query->where('published', true);
    }
 
    public function scopeUnpublished($query)
    {
        return $query->where('published', false);
    }
}
