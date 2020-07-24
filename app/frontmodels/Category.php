<?php

namespace App\frontmodels;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //

    public function children(){
        return $this->hasMany(Category::class,'parent_id','id');
    }

    public function articles(){
        return $this->belongsToMany(Article::class);
    }

    public function scopeSearch($query, $keyword) {
        return $query->where('name', 'LIKE', '%'. $keyword .'%');
    }
}
