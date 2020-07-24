<?php

namespace App\Http\Controllers\back;

use App\Article;
use App\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::orderBy('id', 'DESC')->paginate(10);
        return view('back.comments.comments', compact('comments'));
    }

    
    public function edit(Comment $comment)
    {
        //
        $comments = Comment::all()->pluck('name', 'id');
        return view("back.comments.edit", compact('comment', 'comments'));
    }

    public function update(Request $request, Comment $comment)
    {
        //
        $message = [
            'name.required' => 'لطفا فیلد نام را وارد کنید',
            'email.required' => 'لطفا فیلد ایمیل را وارد کنید',
            'body.required' => 'لطفا فیلد توضیحات را وارد کنید',
        ];
        $validateData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'body' => 'required',
        ],$message);
        try{
            $comment->update($request->all());
        }catch(Exception $exception){
            switch($exception->getCode()){
                case 23000:
                    $msg = "نام مستعار وارد شده تکراری است";
                break;
            }
            return redirect(route('admin.comment.edit'))->with('warning', $exception->getCode());
        }
        $msg = "نظر با موفقیت انحام شد";
        return redirect(route('admin.comments'))->with('success', $msg);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        //
        try{
            $comment->delete();
        }catch(Exception $exception){
            return redirect(route('admin.comments'), $exception->getCode());
        }
        $msg = "آیتم مورد نظر حذف شد";
        return redirect(route('admin.comments'))->with('success', $msg);
    }


    public function updatestatus(Comment $comment)
    {
        if ($comment->status == 1) {
            $comment->status = 0;
        } else {
            $comment->status = 1;
        }

        $comment->save();
        $msg = "بروزرسانی با موفقیت انجام شد";
        return redirect(route('admin.comments'))->with('success', $msg);
    }
}
