<?php

namespace App\Http\Controllers\back;

use App\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \Cviebrock\EloquentSluggable\Services\SlugService;


class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::orderBy('id')->paginate(10);
        return view('back.menus.menus', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menus = Menu::where('parent_id',0)->with('children')->orderBy('id')->get();
        return view('back.menus.create', compact('menus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
        $validateData = $request->validate([
            'title' => 'required',
            'url' => 'required',
            'role' => 'required',
            'parent_id' => 'required'
        ]);
        $menu = new Menu();

        try{
            $menu->create($request->all());
        }catch(Exception $exception){
            switch($exception->getCode()){
                case 23000:
                    $msg = "ایجاد منو با خطا مواجه شد";
                break;
            }
            return redirect(route('admin.menus.create'))->with('warning', $msg);
        }
        $msg = "ذخیره منو با موفقیت انحام شد";
        return redirect(route('admin.menus'))->with('success', $msg);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function show(Articles $articles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        //
        return view("back.menus.edit", compact('menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
        //
        $validateData = $request->validate([
            'title' => 'required',
            'url' => 'required',
            'role' => 'required',
        ]);
        
        try{
            $menu->update($request->all());
        }catch(Exception $exception){
            switch($exception->getCode()){
                case 23000:
                    $msg = "نام مستعار وارد شده تکراری است";
                break;
            }
            return redirect(route('admin.menus.create'))->with('warning', $msg);
        }
        $msg = "ذخیره مطلب با موفقیت انحام شد";
        return redirect(route('admin.menus'))->with('success', $msg);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        //
        try{
            $menu->delete();
        }catch(Exception $exception){
            return redirect(route('admin.menus'), $exception->getCode());
        }
        $msg = "آیتم مورد نظر حذف شد";
        return redirect(route('admin.menus'))->with('success', $msg);
    }


    public function updatestatus(Menu $menu)
    {
        if ($menu->status == 1) {
            $menu->status = 0;
        } else {
            $menu->status = 1;
        }
        $menu->save();
        $msg = "بروزرسانی با موفقیت انجام شد";
        return redirect(route('admin.menus'))->with('success', $msg);
    }
}
