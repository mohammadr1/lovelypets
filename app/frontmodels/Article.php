<?php

namespace App\frontmodels;
use Illuminate\Database\Eloquent\Model;
class Article extends Model
{
    //
    protected $fillable = [
        'title', 'description', 'status', 'image'
    ];

    protected $attributes = [
        'hit' => 0,
        'user_id' => 2,
    ];

    public function categories(){
        return $this->belongsToMany(Category::class);
    }

    public function getRouteKeyName(){
        return 'slug';
    }
    
    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function scopeSearch($query, $keyword)
{
    return $query->where(function ($q) use ($keyword) {
        $q->where('title', 'LIKE', '%'. $keyword.'%')
            ->orWhere('description', 'LIKE', '%'. $keyword.'%');
    })->orWhereHas('categories', function ($q) use ($keyword) {
        $q->where('categories.name', 'LIKE', '%'. $keyword .'%');
    });
}
}
