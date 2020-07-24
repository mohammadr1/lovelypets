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
          <h4 class="page-title">ویرایش منو</h4>
        </div>
      </div>
        
    </div>
    
    <div class="row">

    <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  @include('back.messages')
                  <form action="{{route('admin.menus.update', $menu->id)}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="title">عنوان منو</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                                    value="{{$menu->title}}">
                            </div>

                            <div class="form-group">
                                <label for="title">لینک</label>
                                <input type="text" class="form-control @error('url') is-invalid @enderror" name="url"
                                    value="{{$menu->url}}">
                            </div>

                            <div class="form-group">
                                <label for="title">نقش</label>
                                <input type="text" class="form-control @error('role') is-invalid @enderror" name="role"
                                    value="{{$menu->role}}">
                            </div>

                            <div class="form-group">
                                <label for="title">وضعیت</label>
                                <select class="form-control" name="status">
                                    <option value="0">منتشر نشده</option>
                                    <option value="1" <?php if($menu->status == 1) {echo 'selected';} ?>>منتشر شده</option>
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
