<?php

namespace App\frontmodels;
use Illuminate\Database\Eloquent\Model;
class Search extends Model
{
    public function scopeSearch($query , $keyword)
    {
        $query->where('title', 'LIKE', '%' . $keyword . '%')
            ->orWhere('body', 'LIKE', '%' . $keyword . '%');
        return $query;
    }


}
