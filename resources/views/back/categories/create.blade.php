@extends('back.index')

@section('title')
دسته بندی جدید
@endsection

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <!-- Page Title Header Starts-->
        <div class="row page-title-header">
            <div class="col-12">
                <div class="page-header">
                    <h4 class="page-title">دسته بندی جدید</h4>
                </div>
            </div>

        </div>

        <div class="row">

            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        @include('back.messages')
                        <form action="{{route('admin.categories.store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="title">نام دسته بندی</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{old('name')}}">
                            </div>

                            <div class="form-group">
                                <label for="title">نام مستعار - slug</label>
                                <input type="text" class="form-control @error('slug') is-invalid @enderror" name="slug"
                                    value="{{old('slug')}}">
                            </div>

                            <div class="input-group">
                                <span class="input-group-btn">
                                    <a href="#" id="lfm" data-input="image" data-preview="holder"
                                        class="btn btn-primary">
                                        <i class="fa fa-picture-o"></i> انتخاب
                                    </a>
                                </span>
                                <input id="image" class="form-control @error('picture') is-invalid @enderror"
                                    type="text" name="picture" value="{{old('picture')}}">
                            </div>
                            <img id="holder" style="margin-top:15px;max-height:100px;" value="{{old('picture')}}">
                            
                            <div class="input-group">
                                <label for="title">انتخاب جایگاه دسته بندی</label>
                                <select name="parent_id" class="w-100">
                                    <option value="0">اصلی</option>
                                    @foreach($categories as $category)
                                        @include('back.categories.parent_select_partial',['category'=>$category,'level'=>0])
                                    @endforeach
                                </select>
                            </div>

                            <hr>

                            <div class="form-group">
                                <label for="title"></label>
                                <button type="submit" class="btn btn-success">ذخیره</button>
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
