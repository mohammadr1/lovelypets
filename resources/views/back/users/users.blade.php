@extends('back.index')

@section('title')
مدیریت کاربران
@endsection

@section('content')
<div class="main-panel">
  <div class="content-wrapper">
    <!-- Page Title Header Starts-->
    <div class="row page-title-header">
      <div class="col-12">
        <div class="page-header">
          <h4 class="page-title">مدیریت کاربران</h4>
        </div>
      </div>
        
    </div>
    
    <div class="row">


    <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>نام و نام خانوادگی</th>
                          <th>ایمیل</th>
                          <th>تلفن همراه</th>
                          <th>نقش</th>
                          <th>وضعیت</th>
                          <th>مدیریت</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($users as $user)
                        <tr>
                          <td>{{$user->name}}</td>
                          <td>{{$user->email}}</td>
                          <td>{{$user->phone}}</td>
                          <td>{{$user->role}}</td>
                          <td>{{$user->status}}</td>
                          <td>
                          <a href="#">حذف</a>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

    </div>
  </div>
  <!-- content-wrapper ends -->
  @include('back.footer')
</div>
@endsection
