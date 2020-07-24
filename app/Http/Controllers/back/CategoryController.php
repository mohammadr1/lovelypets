<?php

namespace App\Http\Controllers\back;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('id','DESC')->paginate(10);
        return view('back.categories.categories', compact('categories'));
        // return view('front.article', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::where('parent_id',0)->with('children')->orderBy('id')->get();

         //dd($categiries);
        return view('back.categories.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message = [
            'name.required' => 'لطفا فیلد عنوان را وارد کنید',
            'slug.required' => 'لطفا فیلد نام مستعار را وارد کنید',
            'slug.unique' => 'لطفا نام مستعاری دیگر انتخاب کنید, این فیلد تکراری است',
            'picture.required' => 'لطفا فیلد تصویر را انتحاب کنید',
            // 'parent_id.required' => 'لطفا فیلد انتخاب جایگاه را انتحاب کنید',

        ];
        $validateData = $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:categories',
            'picture' => 'required',
            // 'parent_id' => 'required',

        ],$message);

        // dd($request->all());
        $category = new Category();
        try{
            $category->create($request->all());
        }catch(Exception $exception){
            switch($exception->getCode()){
                case 23000:
                    $msg = "نام مستعار وارد شده تکراری است";
                break;
            }
            return redirect(route('admin.categories.create'))->with('warning', $msg);
        }
        $msg = "ذخیره دسته بندی با موفقیت انحام شد";
        return redirect(route('admin.categories'))->with('success', $msg);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $categories = Category::where('parent_id',0)->with('children')->orderBy('id')->get();
        return view('back.categories.edit', compact('category','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $message = [
            'name.required' => 'لطفا فیلد عنوان را وارد کنید',
            'slug.required' => 'لطفا فیلد نام مستعار را وارد کنید',
            'slug.unique' => 'لطفا نام مستعاری دیگر انتخاب کنید, این فیلد تکراری است',
            'parent_id.required' => 'لطفا فیلد انتخاب جایگاه را انتحاب کنید',
        ];
        $validateData = $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:categories',
            'picture' => 'required',
            'parent_id' => 'required',
        ], $message);
        // $category = new Category();
        try{
            $category->update($request->all());
        }catch(Exception $exception){
            switch($exception->getCode()){
                case 23000:
                    $msg = "نام مستعار وارد شده تکراری است";
                break;
            }
            return redirect(route('admin.categories.edit'))->with('warning', $msg);
        }
        $msg = "ویرایش دسته بندی با موفقیت انحام شد";
        return redirect(route('admin.categories'))->with('success', $msg);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
        try{
            $category->delete();
        }catch(Exception $exception){
            return redirect(route('admin.categories'), $exception->getCode());
        }
        $msg = "آیتم مورد نظر حذف شد";
        return redirect(route('admin.categories'))->with('success', $msg);
    }
}
