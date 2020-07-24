



   <!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ url('front/css/styleLoginAndRegister.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    {!! htmlScriptTagJsApi(['local' => 'en']) !!}
</head>
<body>

 
   
<div class="bodyLogin">

    <div id="back">
      <div class="backRight"></div>
      <div class="backLeft"></div>
    </div>

    <div id="slideBox">
      <div class="topLayer">
        <div class="left">
          <div class="container">
              <div class="row">
                <div class="col-md-12 text-right">
                  <div class="formRegister">
                    <form action="{{route('register')}}" method="POST">

                      @csrf

                        <fieldset>
                          <legend>فرم ثبت نام</legend>
                          <br>
                            <div class="row">
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label class="">نام و نام خانوادگی</label>
                                    <input name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="نام و نام خانوادگی" value="{{old('name')}}">
                                  </div>
                                  @error('name')
                                  <div class="alert alert-danger">{{ $message }}</div>
                                  @enderror
                                  
                                  <div class="form-group">
                                    <label>ایمیل</label>
                                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="ایمیل" value="{{old('email')}}">
                                  </div>
                                  @error('name')
                                  <div class="alert alert-danger">{{ $message }}</div>
                                  @enderror
                                  
                                  <div class="form-group">
                                    <label for="phone">تلفن همراه</label>
                                    <input type="phone" name="phone" class="form-control @error('phone') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="phone" placeholder="تلفن همراه" value="{{old('phone')}}">
                                  </div>
                                  @error('name')
                                  <div class="alert alert-danger">{{ $message }}</div>
                                  @enderror

                                  <div class="form-group">
                                    <label for="password">رمز ورود</label>
                                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword1" aria-describedby="password" placeholder="رمز ورود">
                                  </div>
                                  @error('password')
                                  <div class="alert alert-danger">{{ $message }}</div>
                                  @enderror

                                  <div class="form-group">
                                    <label for="title">تکرار رمز ورود</label>
                                    <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror"
                                      name="password_confirmation" placeholder="تکرار رمز ورود">
                                    @error('password_confirmation')
                                    <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                  </div>

                                  <!-- <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                  </div> -->
                                  <button type="submit col-md-3 float-right" class="btn btn-primary col-md-2">ثبت نام</button>
                                </div>
                            </div>
                          </fieldset>

                        </form>
                        <a href="{{route('login')}}" class="btn btn-warning col-md-2 mt-2">
                          <-
                          ورود
                        </a>
                      </div>
                  </div>
              </div>
            </div>
          
        </div>
       
            
      <!-- </div> -->
    </div>


</div>

  
  

  


</body>

<script src="{{ url('front/js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ url('front/js/register.js') }}"></script>
</html>






