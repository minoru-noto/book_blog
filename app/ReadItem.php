<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReadItem extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'postItem_id'
    ];
    
    public function postItem()
    {
        return $this->belongsTo('App\PostItem','postItem_id','id');
    }
    
    
}
