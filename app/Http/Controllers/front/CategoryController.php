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

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Category $category)
    {
        $article = Article::orderBy('id')->paginate(20);
        $categories = Category::orderBy('id')->paginate(20)->where('parent_id', '0');
        $menus = Menu::orderBy('role')->where('status', 1)->get();
        $sliders = Slider::orderBy('id')->where('status', 1)->get();

        // dd($article);
        return view('front.categories', compact('categories', 'article', 'menus', 'sliders'));
    }
    
    public function show($category)
    {
        $categories = Category::orderBy('id')->get();
        // dd($categories);

        $categories = Category::where('parent_id',0)->with('children')->orderBy('id')->get();

        
        $category = Category::with('articles')->where('slug',$category)->first();

        // $categiry->with('children')->where('slug',$slug)->first();

        // dd($article);
        $menus = Menu::orderBy('role')->where('status', 1)->get();
        $sliders = Slider::orderBy('id')->where('status', 1)->get();


        return view('front.category', compact('category', 'categories', 'menus', 'sliders'));

    }


    public function subCategories($category_slug){


        $category = Category::where('slug',$category_slug)->firstOrFail();
        $subCategories = $category->children;
        $articles = $category->articles;

        // dd($subCategories);
        // dd(!is_array($articles));

        $menus = Menu::orderBy('role')->where('status', 1)->get();
        $sliders = Slider::orderBy('id')->where('status', 1)->get();
        
        return view('front.categoriesChild', compact('category', 'articles', 'subCategories', 'menus', 'sliders'));
    }
}
