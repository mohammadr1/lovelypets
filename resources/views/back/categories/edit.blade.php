@extends('back.index')

@section('title')
ویرایش دسته بندی
@endsection

@section('content')
<div class="main-panel">
  <div class="content-wrapper">
    <!-- Page Title Header Starts-->
    <div class="row page-title-header">
      <div class="col-12">
        <div class="page-header">
          <h4 class="page-title">ویرایش دسته بندی</h4>
        </div>
      </div>
        
    </div>
    
    <div class="row">

    <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  @include('back.messages')
                  <form action="{{route('admin.categories.update', $category->id)}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="title">نام دسته بندی</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{$category->name}}">
                            </div>

                            <div class="form-group">
                                <label for="title">نام مستعار - slug</label>
                                <input type="text" class="form-control @error('slug') is-invalid @enderror" name="slug"
                                    value="{{$category->slug}}">
                            </div>


                            <div class="input-group">
                                <span class="input-group-btn">
                                    <a href="#" id="lfm" data-input="image" data-preview="holder"
                                        class="btn btn-primary">
                                        <i class="fa fa-picture-o"></i> انتخاب
                                    </a>
                                </span>
                                <input id="image" class="form-control" type="text" name="picture" value="{{$category->picture}}">
                            </div>
                            <img id="holder" style="max-height:100px;" class="mb-3" src="{{$category->picture}}">

                            
                            <div class="input-group">
                            <label for="title">انتخاب جایگاه دسته بندی</label>
                              <select name="parent_id" class="w-100">
                                  <option value="0">اصلی</option>
                                  @foreach($categories as $category)
                                    @include('back.categories.parent_select_partial_Edit',['category'=>$category,'level'=>0])
                                  @endforeach
                              </select>
                            </div>

<hr>
                            <div class="form-group">
                                <label for="title"></label>
                                <button type="submit" class="btn btn-success">ویرایش</button>
                                <a href="{{route('admin.categories')}}" class="btn btn-warning"> انصراف </a>
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
