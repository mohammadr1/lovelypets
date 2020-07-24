<?php

namespace App\frontmodels;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $fillable = [
        'body', 'name', 'email'
    ];
    
    protected $attributes = [
        'parent_id' => '0',
        'answer' => '',
    ];


    public function childs(){
        return $this->hasMany(Comment::class,'parent_id','id');
    }

    public function parent(){
        return $this->belongsTo(Comment::class,'parent_id','id');
    }

}
