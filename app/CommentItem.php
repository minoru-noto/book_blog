<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentItem extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'postItem_id', 'content','rank'
    ];
    
    public function user()
    {
        return $this->belongsTo('App\User','user_id','id');
    }
    
}
