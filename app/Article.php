<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $fillable = [
        'user_id', 'category_id','title','description', 'image'
    ];
    protected function user(){
        return $this->hasOne('App\User','user_id');
    }
    protected function category(){
        return $this->belongsTo('App\Category','category_id');
    }
}
