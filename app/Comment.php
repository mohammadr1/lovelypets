<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $fillable = [
        'body', 'name', 'email', 'status', 'answer'
    ];

    public function Article(){
        return $this->belongsTo(Article::class);
    }

}
