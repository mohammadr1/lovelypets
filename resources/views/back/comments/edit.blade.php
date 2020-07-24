@extends('back.index')

@section('title')
پنل مدیریت - مدیریت نظرات
@endsection

@section('content')
<div class="main-panel">
  <div class="content-wrapper">
    <!-- Page Title Header Starts-->
    <div class="row page-title-header">
      <div class="col-12">
        <div class="page-header">
          <h4 class="page-title"> ویرایش نظرات </h4>
        </div>
      </div>
        
    </div>
    
    <div class="row">

    <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  @include('back.messages')
                  <form action="{{route('admin.comments.update', $comment->id)}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="title">نام </label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{$comment->name}}">
                            </div>

                            <div class="form-group">
                                <label for="title">ایمییل</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{$comment->email}}">
                            </div>

                            <div class="form-group">
                                <label for="title">محتوای مطلب</label>
                                <textarea
                                    class="form-control @error('body') is-invalid @enderror"
                                    name="body" id="ckeditor">{{$comment->body}}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="title">وضعیت</label>
                                <select class="form-control" name="status">
                                    <option value="0">منتشر نشده</option>
                                    <option value="1" <?php if($comment->status == 1) {echo 'selected';} ?>>منتشر شده</option>
                                </select>
                            </div>

                            <hr>
                            
                            <div class="form-group">
                                <label for="title">پاسخ به همین کامنت</label>
                                <textarea class="col-md-12 p-2" name="answer" placeholder="{{ $comment->body }}">{{$comment->answer}}</textarea>
                            </div>

                            <hr>

                            <div class="form-group">
                                <label for="title"></label>
                                <button type="submit" class="btn btn-success">ذخیره</button>
                                <a href="{{route('admin.comments')}}" class="btn btn-warning"> انصراف </a>
                            </div>

                        </form>

                  </div>
                </div>
              </div>

    </div>
  </div>
  <!-- content-wrapper ends -->
  @include('back.footer')
</div>
@endsection
