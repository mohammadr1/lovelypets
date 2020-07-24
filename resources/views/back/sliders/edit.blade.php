@extends('back.index')

@section('title')
پنل مدیریت - مدیریت اسلایدر ها
@endsection

@section('content')
<div class="main-panel">
  <div class="content-wrapper">
    <!-- Page Title Header Starts-->
    <div class="row page-title-header">
      <div class="col-12">
        <div class="page-header">
          <h4 class="page-title">ویرایش اسلایدر</h4>
        </div>
      </div>
        
    </div>
    
    <div class="row">

    <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  @include('back.messages')
                  <form action="{{route('admin.sliders.update', $slider->id)}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="title">عنوان اسلایدر</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                                    value="{{$slider->title}}">
                            </div>

                            <div class="form-group">
                                <label for="title">لینک</label>
                                <input type="text" class="form-control @error('url') is-invalid @enderror" name="url"
                                    value="{{$slider->url}}">
                            </div>


                            <div class="input-group">
                                <label for="image" class="w-100">تصویر</label>
                                <span class="input-group-btn">
                                    <a href="#" id="lfm" data-input="image" data-preview="holder"
                                        class="btn btn-primary">
                                        <i class="fa fa-picture-o"></i> انتخاب
                                    </a>
                                </span>
                                <input id="image" class="form-control @error('image') is-invalid @enderror" type="text" name="image" value="{{ $slider->image }}">
                            </div>
                            <p class="text-danger">لطفا دقت نمایید که عرض تصویر باید <strong class="bg-secondary rounded">1366</strong> پیکسل و ارتفاع آن <strong class="bg-secondary rounded">557</strong> پیکسل باشد ,  (تصویر مورد نظر سمت راست باشد)</p>
                            <img class="mb-2" id="holder" src="{{ $slider->image }}" style="margin-top:15px;max-height:100px;">
                            

                            <div class="form-group">
                                <label for="title">وضعیت</label>
                                <select class="form-control" name="status">
                                    <option value="0">منتشر نشده</option>
                                    <option value="1" <?php if($slider->status == 1) {echo 'selected';} ?>>منتشر شده</option>
                                </select>
                            </div>

                            <hr>

                            <div class="form-group">
                                <label for="title"></label>
                                <button type="submit" class="btn btn-success">ذخیره</button>
                                <a href="{{route('admin.sliders')}}" class="btn btn-warning"> انصراف </a>
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
