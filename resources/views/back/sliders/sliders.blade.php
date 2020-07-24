@extends('back.index')

@section('title')
پنل مدیریت - مدیریت اسلایدر ها
@endsection

@section('content')
<div class="main-panel">
  <div class="content-wrapper">
    <!-- Page Title Header Starts-->
    <div class="row page-title-header">
      <div class="col-md-12">
        <div class="page-header">
          <h4 class="page-title col-md-6">مدیریت اسلایدر</h4>
          <div class="col-md-6 text-left pt-2 pl-4">
            <a class="btn btn-success" href="{{route('admin.sliders.create')}}">ایجاد</a>
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
                <th scope="col">تصویر</th>
                <th scope="col">وضعیت</th>
                <th scope="col">مدیریت</th>
              </tr>
            </thead>
            <tbody>
            @foreach($sliders as $slider)
              @switch($slider->status)
                @case(1)
                @php
                $url = route('admin.sliders.status',$slider->id);
                $status = '<a href="'.$url.'" class="badge badge-success pt-2 pr-3 pb-2 pl-3">فعال</a>' @endphp
                @break
                @case(0)
                @php
                $url = route('admin.sliders.status',$slider->id);
                $status = '<a href="'.$url.'" class="badge badge-warning pt-2 pr-3 pb-2 pl-3">غیر فعال</a>' @endphp
                @break
                @default
              @endswitch

              <tr class="text-center">
                <td>{{$slider->id}}</td>
                <td>{{$slider->title}}</td>
                <td>{{$slider->url}}</td>       
                <td><a href="{{$slider->image}}" target="_blank" data-toggle="tooltip" data-placement="top" title="نمایش"><img src="{{$slider->image}}" alt=""></a></td>
                <td>{!!$status!!}</td>
                <td>
                  <a href="{{ route('admin.sliders.edit', $slider->id) }}" class="pl-3" ><i class="fa fa-edit fa-2x "></i></a>
                  <a href="{{ route('admin.sliders.destroy', $slider->id) }}" onclick="return confirm('آیا آیتم مورد نظر حذف شود');" class=" mt-2"><i class="fa fa-trash fa-2x"></i></a>                            
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
