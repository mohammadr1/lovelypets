<?php

namespace App\Http\Controllers\back;

use App\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \Cviebrock\EloquentSluggable\Services\SlugService;


class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = slider::orderBy('id', 'DESC')->paginate(10);
        return view('back.sliders.sliders', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.sliders.create');
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
            'image' => 'required',  
        ]);
        
        $slider = new Slider();

        try{
            $slider->create($request->all());
        }catch(Exception $exception){
            switch($exception->getCode()){
                case 23000:
                    $msg = "ایجاد اسلایدر با خطا مواجه شد";
                break;
            }
            return redirect(route('admin.sliders.create'))->with('warning', $msg);
        }
        $msg = "ذخیره اسلایدر با موفقیت انحام شد";
        return redirect(route('admin.sliders'))->with('success', $msg);
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
    public function edit(Slider $slider)
    {
        //
        return view("back.sliders.edit", compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        //
        $validateData = $request->validate([
            'title' => 'required',
            'url' => 'required',
            'image' => 'required',
        ]);
        
        try{
            $slider->update($request->all());
        }catch(Exception $exception){
            $msg = "ذخیره اسلایدر با مشکل مواجه شد";
            return redirect(route('admin.sliders.create'))->with('warning', $msg);
        }
        $msg = "ذخیره اسلایدر با موفقیت انحام شد";
        return redirect(route('admin.sliders'))->with('success', $msg);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        //
        try{
            $slider->delete();
        }catch(Exception $exception){
            return redirect(route('admin.sliders'), $exception->getCode());
        }
        $msg = "آیتم مورد نظر حذف شد";
        return redirect(route('admin.sliders'))->with('success', $msg);
    }


    public function updatestatus(Slider $slider)
    {
        if ($slider->status == 1) {
            $slider->status = 0;
        } else {
            $slider->status = 1;
        }
        $slider->save();
        $msg = "بروزرسانی با موفقیت انجام شد";
        return redirect(route('admin.sliders'))->with('success', $msg);
    }
}
