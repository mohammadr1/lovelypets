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

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::orderBy('role')->where('status', 1)->get();
        $sliders = Slider::orderBy('id')->where('status', 1)->get();
        
        return view('front.about', compact('menus', 'sliders'));
    }
    
    public function show(Article $article)
    {
        $article->increment('hit');
        $comments = $article->comments()->with('childs')->where('status',1 )->get();

        $article_Oder = DB::table('articles')
            ->join('article_category', 'articles.id', '=', 'article_category.article_id')
            ->join('categories', 'categories.id', '=', 'article_category.category_id')
            ->select('articles.*', 'categories.name')
            ->where('name', $article->categories()->pluck('name'))->get();

        $menus = Menu::orderBy('role')->where('status', 1)->get();
        $sliders = Slider::orderBy('id')->where('status', 1)->get();

        return view('front.article', compact('article', 'comments', 'article_Oder', 'menus', 'sliders'));
    }
}
