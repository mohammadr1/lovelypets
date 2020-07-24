@extends('back.index')

@section('title')
پنل مدیریت - مدیریت نظرات
@endsection

@section('content')
<div class="main-panel">
  <div class="content-wrapper">
    <!-- Page Title Header Starts-->
    <div class="row page-title-header">
      <div class="col-md-12">
        <div class="page-header">
          <h4 class="page-title col-md-6">مدیریت نظرات</h4>
          
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
                <th>خلاصه نظر</th>
                <th scope="col">نویسنده</th>
                <th scope="col">برای مطلب</th>
                <th scope="col">تاریخ ایجاد</th>
                <th scope="col">وضعیت</th>
                <th scope="col">مدیریت</th>
              </tr>
            </thead>
            <tbody>
            @foreach($comments as $comment)
              @switch($comment->status)
                @case(1)
                @php
                $url = route('admin.comments.status',$comment->id);
                $status = '<a href="'.$url.'" class="badge badge-success pt-2 pr-3 pb-2 pl-3">فعال</a>' @endphp
                @break
                @case(0)
                @php
                $url = route('admin.comments.status',$comment->id);
                $status = '<a href="'.$url.'" class="badge badge-warning pt-2 pr-3 pb-2 pl-3">غیر فعال</a>' @endphp
                @break
                @default
              @endswitch

              <tr class="text-center">
                <td>{{$comment->id}}</td>
                <td><?php echo mb_substr(strip_tags($comment->body),0,30,'utf8').' ... ' ?></td>
                <td>{{$comment->name}}</td>       
                <td>{{$comment->article->title}}</td>       
                <td>{!! jdate($comment->created_at)->format('d / m / Y') !!}</td>       
                <td>{!!$status!!}</td>
                <td>
                  <a href="{{ route('admin.comments.edit', $comment->id) }}" class="pl-3" ><i class="fa fa-edit fa-2x "></i></a>
                  <a href="{{ route('admin.comments.destroy', $comment->id) }}" onclick="return confirm('آیا آیتم مورد نظر حذف شود');" class=" mt-2"><i class="fa fa-trash fa-2x"></i></a>
                  
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        {{$comments->links()}}      
      </div>
    </div>

  </div>
  <!-- content-wrapper ends -->
  @include('back.footer')
</div>
@endsection
