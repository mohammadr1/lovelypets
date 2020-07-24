<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="{{route('home')}}">
          <img src="{{url('/back/assets/images/logo.svg')}}" alt="logo" /> </a>
        <a class="navbar-brand brand-logo-mini" href="{{route('home')}}">
          <img src="{{route('home')}}" alt="logo" /> </a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav">
          <li class="nav-item font-weight-semibold d-none d-lg-block">پشتیبانی :6421 988 0901</li>
          
        </ul>
        <form class="ml-auto search-form d-none d-md-block" action="#">
          <div class="form-group">
            <input type="search" class="form-control " placeholder="جستجو">
          </div>
        </form>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator" id="messageDropdown" href="#" data-toggle="dropdown"
              aria-expanded="false">
              <i class="mdi mdi-bell-outline"></i>
              <span class="count">7</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0"
              aria-labelledby="messageDropdown">
              <a class="dropdown-item py-3">
                <p class="mb-0 font-weight-medium float-left">اعلان ها 7 عدد </p>
                <span class="badge badge-pill badge-primary float-right">مشاهده</span>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="{{url('/back/assets/images/faces/face10.jpg')}}" alt="image" class="img-sm profile-pic"> </div>
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">حمید حمیدی </p>
                  <p class="font-weight-light small-text"> ایمیل ثبت نام ارسال شد </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="{{url('/back/assets/images/faces/face12.jpg')}}" alt="image" class="img-sm profile-pic"> </div>
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">امیر امیری </p>
                  <p class="font-weight-light small-text"> ایمیل ثبت نام ارسال شد </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="{{url('/back/assets/images/faces/face1.jpg')}}" alt="image" class="img-sm profile-pic"> </div>
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">حامد حامدی </p>
                  <p class="font-weight-light small-text"> ایمیل ثبت نام ارسال شد </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-email-outline"></i>
              <span class="count bg-success">3</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0"
              aria-labelledby="notificationDropdown">
              <a class="dropdown-item py-3 border-bottom">
                <p class="mb-0 font-weight-medium float-left">4 پیام خوانده نشده دارید</p>
                <span class="badge badge-pill badge-primary float-right">مشاهده</span>
              </a>
              <a class="dropdown-item preview-item py-3">
                <div class="preview-thumbnail">
                  <i class="mdi mdi-alert m-auto text-primary"></i>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal text-dark mb-1">پیام نمونه ی یک</h6>
                  <p class="font-weight-light small-text mb-0"> هم اکنون </p>
                </div>
              </a>
              <a class="dropdown-item preview-item py-3">
                <div class="preview-thumbnail">
                  <i class="mdi mdi-settings m-auto text-primary"></i>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal text-dark mb-1">یک پیام آزمایشی</h6>
                  <p class="font-weight-light small-text mb-0"> 2 روز پیش </p>
                </div>
              </a>
              <a class="dropdown-item preview-item py-3">
                <div class="preview-thumbnail">
                  <i class="mdi mdi-airballoon m-auto text-primary"></i>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal text-dark mb-1">ثبت نام کاربر جدید</h6>
                  <p class="font-weight-light small-text mb-0"> 2 روز پیش </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <img class="img-xs rounded-circle" src="{{url('/storage/photos/1/blue-user-icon-32.jpg')}}" alt="Profile image"> </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
                <img class="img-md rounded-circle" src="{{url('/storage/photos/1/blue-user-icon-32.jpg')}}" alt="Profile image">
                <p class="mb-1 mt-3 font-weight-semibold">{{ Auth::user()->name}}</p>
                <p class="font-weight-light text-muted mb-0">{{ Auth::user()->email }}</p>
              </div>
              <a class="dropdown-item" href="{{route('profile', Auth::user())}}">پروفایل من <span class="badge badge-pill badge-danger">1</span><i
                  class="dropdown-item-icon ti-dashboard"></i></a>
              <!-- <a class="dropdown-item" href="">خروج<i class="dropdown-item-icon ti-power-off"></i></a> -->
              <form action="{{route('logout')}}" method="post">
                @csrf
                <input type="submit" value="خروج" class="dropdown-item">
                <i class="dropdown-item-icon ti-power-off"></i>
              </form>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
          data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>