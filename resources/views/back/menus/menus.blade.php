@extends('back.index')

@section('title')
پنل مدیریت - مدیریت منو ها
@endsection

@section('content')
<div class="main-panel">
  <div class="content-wrapper">
    <!-- Page Title Header Starts-->
    <div class="row page-title-header">
      <div class="col-md-12">
        <div class="page-header">
          <h4 class="page-title col-md-6">مدیریت منو</h4>
          <div class="col-md-6 text-left pt-2 pl-4">
            <a class="btn btn-success" href="{{route('admin.menus.create')}}">ایجاد</a>
          </div>
        </div>
      </div>
        
    </div>
    
    <div class="row">

    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
        @include('back.messages')
          <table class="table ">
            <thead>
              <tr class="text-center">
                <th class="w-10 col">شناسه</th>
                <th scope="col">عنوان</th>
                <th scope="col">لینک</th>
                <th scope="col">نقش</th>
                <th scope="col">وضعیت</th>
                <th scope="col">مدیریت</th>
              </tr>
            </thead>
            <tbody>
            @foreach($menus as $menu)
              @switch($menu->status)
                @case(1)
                @php
                $url = route('admin.menus.status',$menu->id);
                $status = '<a href="'.$url.'" class="badge badge-success pt-2 pr-3 pb-2 pl-3">فعال</a>' @endphp
                @break
                @case(0)
                @php
                $url = route('admin.menus.status',$menu->id);
                $status = '<a href="'.$url.'" class="badge badge-warning pt-2 pr-3 pb-2 pl-3">غیر فعال</a>' @endphp
                @break
                @default
              @endswitch

              <tr class="text-center">
                <td>{{$menu->id}}</td>
                <td>{{$menu->title}}</td>
                <td>{{$menu->url}}</td>       
                <td>{{$menu->role}}</td>
                <td>{!!$status!!}</td>
                <td>
                  <a href="{{ route('admin.menus.edit', $menu->id) }}" class="pl-3" ><i class="fa fa-edit fa-2x "></i></a>
                  <a href="{{ route('admin.menus.destroy', $menu->id) }}" onclick="return confirm('آیا آیتم مورد نظر حذف شود');" class=" mt-2"><i class="fa fa-trash fa-2x"></i></a>                            
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
          
      </div>
    </div>


  </div>
  <!-- content-wrapper ends -->
  @include('back.footer')
</div>
@endsection
