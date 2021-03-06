<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostItem extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'author', 'content','img_url'
    ];
    
    public function user()
    {
        return $this->belongsTo('App\User','user_id','id');
    }
    
    
    
}
