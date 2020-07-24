@extends('back.index')

@section('title')
مدیریت دسته بندی ها
@endsection

@section('content')
<div class="main-panel">
  <div class="content-wrapper">
    <!-- Page Title Header Starts-->
    <div class="row page-title-header">
      <div class="col-md-12">
        <div class="page-header">
          <h4 class="page-title col-md-6">مدیریت دسته بندی ها</h4>
          <div class="col-md-6 text-left pt-2 pl-4">
            <a class="btn btn-success" href="{{route('admin.categories.create')}}">ایجاد</a>
          </div>
        </div>
      </div>
        
    </div>
    
    <div class="row">


    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
        @include('back.messages')
          <table class="table table-hover">
            <thead>
              <tr class="text-center">
                <th class="w-10">شناسه</th>
                <th>نام</th>
                <th>نام مستعار</th>
                <th>عکس</th>
                <th>دسته بندی</th>
                <th>مدیریت</th>
              </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
              <tr class="text-center">
                <td>{{$category->id}}</td>
                <td>{{$category->name}}</td>
                <td>{{$category->slug}}</td>
                <td><img src="{{$category->picture}}" alt=""></td>
                <td>
                {{$category->name}}
                </td>
                <td>
                  <a href="{{ route('admin.categories.edit', $category->id) }}" class="pl-3" ><i class="fa fa-edit fa-2x "></i></a>
                  <a href="{{ route('admin.categories.destroy', $category->id) }}" onclick="return confirm('آیا آیتم مورد نظر حذف شود');" class=" mt-2"><i class="fa fa-trash fa-2x"></i></a>                            
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        {{$categories->links()}}
      </div>
    </div>

    </div>
  </div>
  <!-- content-wrapper ends -->
  @include('back.footer')
</div>
@endsection
