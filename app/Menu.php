<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    //
    protected $fillable = [
        'title', 'url', 'role', 'status', 'parent_id'
    ];

    public function children(){
        return $this->hasMany(Menu::class,'parent_id','id');
    }
}
