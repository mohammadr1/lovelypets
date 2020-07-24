
  <section id="intro" class="clearfix"></section>

  <main id="container main"><br>
   <div class="container" dir="rtl">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">خانه</a></li>
          <li class="breadcrumb-item active" aria-current="page"> ثبت نام</li>
        </ol>
    </nav>
    <form action="{{route('profileupdate', $user->id)}}" method="POST">

    @csrf

        <div class="form-group">
          <label for="exampleInputEmail1">نام و نام خانوادگی</label>
          <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="نام و نام خانوادگی" value="{{$user->name}}">
        </div>
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        
        <div class="form-group">
          <label for="exampleInputEmail">ایمیل</label>
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ایمیل" value="{{$user->email}}">
        </div>
        @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        
        <div class="form-group">
          <label for="exampleInputEmail">تلفن همراه</label>
          <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="تلفن همراه" value="{{$user->phone}}">
        </div>
        @error('phone')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
          <label for="exampleInputPassword1">رمز ورود</label>
          <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword1" placeholder="رمز ورود">
        </div>
        @error('password')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
          <label for="title">تکرار رمز ورود</label>
          <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror"
            name="password_confirmation">
          @error('password_confirmation')
          <div class="alert alert-danger">{{$message}}</div>
          @enderror
        </div>

        <!-- <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div> -->
        <button type="submit" class="btn btn-primary">ارسال</button>
        <a href="{{route('admin.index')}}" class="btn btn-danger" >بازگشت</a>

      </form>
    
   </div>
   <br>
  </main>