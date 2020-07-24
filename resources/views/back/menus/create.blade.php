@extends('back.index')

@section('title')
پنل مدیریت - مدیریت منو ها
@endsection

@section('content')
<div class="main-panel">
  <div class="content-wrapper">
    <!-- Page Title Header Starts-->
    <div class="row page-title-header">
      <div class="col-12">
        <div class="page-header">
          <h4 class="page-title">مطلب منو</h4>
        </div>
      </div>
        
    </div>
    
    <div class="row">

    <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  @include('back.messages')
                  <form action="{{route('admin.menus.store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="title">عنوان منو</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                                    value="{{old('title')}}">
                            </div>

                            <div class="form-group">
                                <label for="title">لینک</label>
                                <a href="{{ route('admin.articles') }}" target="_blank"><i class="fa fa-link fa-2x"></i></a>
                                <input type="text" class="form-control @error('url') is-invalid @enderror" name="url"
                                    value="{{old('url')}}">
                            </div>

                            <div class="form-group">
                                <label for="title">نقش</label>
                                <input type="number" class="form-control @error('role') is-invalid @enderror" name="role"
                                    value="{{old('role')}}">
                            </div>

                            <div class="form-group">
                                <label for="title">وضعیت</label>
                                <select class="form-control" name="status">
                                    <option value="1">منتشر شده</option>
                                    <option value="0">منتشر نشده</option>
                                </select>
                            </div>


                            <div class="input-group">
                                <label for="title">انتخاب جایگاه منو</label>
                                <select name="parent_id" class="w-100">
                                    <option value="0">اصلی</option>
                                    @foreach($menus as $menu)
                                        @include('back.menus.parent_select_partial',['menu'=>$menu,'level'=>0])
                                    @endforeach
                                </select>
                            </div>
                            

                            
                            <hr>

                            <div class="form-group">
                                <label for="title"></label>
                                <button type="submit" class="btn btn-success">ذخیره</button>
                                <a href="{{route('admin.menus')}}" class="btn btn-warning"> انصراف </a>
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
