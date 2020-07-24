<?php

namespace App\Http\Controllers\front;

use App\frontmodels\Article;
use App\frontmodels\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    public function store(Article $article, Request $request){
        //
        // return $request;
        
        $message = [
            'name.required' => 'لطفا فیلد نام را وارد کنید',
            'email.required' => 'لطفا فیلد ایمیل را وارد کنید',
            'body.required' => 'لطفا توضیحات را وارد کنید',
            'recaptcha' => 'تصویر امنیتی را انتخاب کنید',
        ];
        $validateData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'body' => 'required',
            recaptchaFieldName() => recaptchaRuleName(),
        ],$message);
        $article->comments()->create(
            [
                'name' => $request->name,
                'email' => $request->email,
                'body' => $request->body,
            ]
        );
        $msg = "نظر شما با موفقیت ثبت شد و پس از تایید مدیریت سایت, نمایش داده میشود";
        return back()->with('success', $msg);
    }
}
