<?php

namespace App\Http\Controllers\front;

use App\frontmodels\Article;
use App\frontmodels\Category;
use App\frontmodels\User;
use App\frontmodels\Menu;
use App\frontmodels\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class searchController extends Controller
{
    public function search(){
        $key = request('keyword');
        $lessons = Article::search($key)->get();

        $menus = Menu::orderBy('role')->where('status', 1)->get();

        $sliders = Slider::orderBy('id')->where('status', 1)->get();
        
        return view('front.search', compact('lessons','key', 'menus', 'sliders'));
    }   
}
