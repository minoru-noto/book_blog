<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentReadItems extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'content','user_id', 'readItem_id', 
    ];
    
    public function user()
    {
        return $this->belongsTo('App\User','user_id','id');
    }
    
    
}
