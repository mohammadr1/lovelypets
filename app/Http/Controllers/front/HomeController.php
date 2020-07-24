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
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $article_Dog = DB::table('articles')
            ->join('article_category', 'articles.id', '=', 'article_category.article_id')
            ->join('categories', 'categories.id', '=', 'article_category.category_id')
            ->select('articles.*', 'categories.name')
            ->where('name',"سگ")->limit(3)->get();

            $article_Cat = DB::table('articles')
            ->join('article_category', 'articles.id', '=', 'article_category.article_id')
            ->join('categories', 'categories.id', '=', 'article_category.category_id')
            ->select('articles.*', 'categories.name')
            ->where('name',"گربه" )->limit(3)->get();

            $article_Parande = DB::table('articles')
            ->join('article_category', 'articles.id', '=', 'article_category.article_id')
            ->join('categories', 'categories.id', '=', 'article_category.category_id')
            ->select('articles.*', 'categories.name')
            ->where('name',"پرندگان" )->limit(1)->get();

            $article_Khazande = DB::table('articles')
            ->join('article_category', 'articles.id', '=', 'article_category.article_id')
            ->join('categories', 'categories.id', '=', 'article_category.category_id')
            ->select('articles.*', 'categories.name')
            ->where('name',"خزندگان" )->limit(1)->get();

            $article_Javande = DB::table('articles')
            ->join('article_category', 'articles.id', '=', 'article_category.article_id')
            ->join('categories', 'categories.id', '=', 'article_category.category_id')
            ->select('articles.*', 'categories.name')
            ->where('name',"جوندگان" )->limit(1)->get();


            $articleAll = Article::orderBy('id')->get();
            $ArticleRand = rand(1,count($articleAll));
            $articleNewRand = $articleAll->where('id', $ArticleRand);

            $articles_New = Article::orderBy('id', 'DESC')->where('status', 1)->limit(3)->get();

            $articles_Popular = Article::orderBy('hit', 'DESC')->where('status', 1)->limit(3)->get();


            $menus = Menu::orderBy('role')->where('status', 1)->get();

            $sliders = Slider::orderBy('id')->where('status', 1)->get();

        return view('front.main', compact('article_Dog', 'article_Cat','articles_New', 'articles_Popular', 'article_Parande', 'article_Khazande', 'article_Javande', 'menus', 'sliders', 'articleNewRand'));
    }


    public function show()
    {

    }
}
