@extends('back.index')

@section('title')
پنل مدیریت - مدیریت مطالب
@endsection

@section('content')
<div class="main-panel">
  <div class="content-wrapper">
    <!-- Page Title Header Starts-->
    <div class="row page-title-header">
      <div class="col-md-12">
        <div class="page-header">
          <h4 class="page-title col-md-6">مدیریت مطالب</h4>
          <div class="col-md-6 text-left pt-2 pl-4">
            <a class="btn btn-success" href="{{route('admin.articles.create')}}">ایجاد</a>
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
                <th>نام</th>
                <!-- <th scope="col">نام مستعار</th> -->
                <th scope="col">دسته بندی</th>
                <th scope="col">لینک</th>
                <th scope="col">بازدید</th>
                <th scope="col">وضعیت</th>
                <th scope="col">مدیریت</th>
              </tr>
            </thead>
            <tbody>
            @foreach($articles as $article)
              @switch($article->status)
                @case(1)
                @php
                $url = route('admin.articles.status',$article->id);
                $status = '<a href="'.$url.'" class="badge badge-success pt-2 pr-3 pb-2 pl-3">فعال</a>' @endphp
                @break
                @case(0)
                @php
                $url = route('admin.articles.status',$article->id);
                $status = '<a href="'.$url.'" class="badge badge-warning pt-2 pr-3 pb-2 pl-3">غیر فعال</a>' @endphp
                @break
                @default
              @endswitch

              <tr class="text-center">
                <td>{{$article->id}}</td>
                <td>{{$article->title}}</td>
                <!-- <td>{{$article->slug}}</td>         -->
                <td style="max-width:100px; overflow:hidden; height:auto;position:">
                   @foreach($article->categories()->pluck('name') as $category)
                        <div class="btn btn-success mr-2 p-1">{{ $category }} </div>
                    @endforeach
                </td>
                <td><input disabled type="text" class="text-center" value="/articles/<?php echo $article->slug ?>"></td>
                <td>{{$article->hit}}</td>
                <td>{!!$status!!}</td>
                <td>
                  <a href="{{ route('admin.articles.edit', $article->id) }}" class="pl-3" ><i class="fa fa-edit fa-2x "></i></a>
                  <a href="{{ route('admin.articles.destroy', $article->id) }}" onclick="return confirm('آیا آیتم مورد نظر حذف شود');" class=" mt-2"><i class="fa fa-trash fa-2x"></i></a>
                  <!-- <a href="javascript:void(0)" onclick="handlecopy({{$article->slug}})" class="copy-button mt-2 mr-2"><i class="fa fa-copy fa-2x"></i></a> -->
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        {{$articles->links()}}      
      </div>
    </div>


  </div>
  <!-- content-wrapper ends -->
  @include('back.footer')
</div>
@endsection





<!-- <script>
  function handlecopy(slug){
    var clipboard = new Clipboard('.copy-button', {    
      text: function() {
          return 'clipboard.js is awesome!';
      }
    }); 
  }
</script> -->