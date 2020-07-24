<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav position-fixed">
          <li class="nav-item nav-profile">
            <a href="{{ route('admin.index') }}" class="nav-link">
              <div class="profile-image">
                <img class="img-xs rounded-circle" src="/storage/photos/1/blue-user-icon-32.jpg" alt="profile image">
                <div class="dot-indicator bg-success"></div>
              </div>
              <div class="text-wrapper p-2">
                <p class="profile-name">{{ Auth::user()->name }}</p>
                <p class="designation">مدیریت سایت</p>
              </div>
            </a>
          </li>
          <li class="nav-item nav-category">منوی اصلی</li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.index') }}">
              <i class="menu-icon typcn typcn-document-text"></i>
              <span class="menu-title">کنترل پنل</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#category" aria-expanded="false" aria-controls="category">
              <i class="menu-icon typcn typcn-coffee"></i>
              <span class="menu-title">دسته بندی ها</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="category">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="{{route('admin.categories')}}">نمایش</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('admin.categories.create')}}">ایجاد</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#article" aria-expanded="false" aria-controls="category">
              <i class="menu-icon typcn typcn-coffee"></i>
              <span class="menu-title">مطالب</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="article">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="{{route('admin.articles')}}">نمایش</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('admin.articles.create')}}">ایجاد</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.comments') }}">
              <i class="menu-icon typcn typcn-shopping-bag"></i>
              <span class="menu-title">کامنت ها</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#menus" aria-expanded="false" aria-controls="category">
              <i class="menu-icon typcn typcn-coffee"></i>
              <span class="menu-title">منو ها</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="menus">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="{{route('admin.menus')}}">نمایش</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('admin.menus.create')}}">ایجاد</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#sliders" aria-expanded="false" aria-controls="slider">
              <i class="menu-icon typcn typcn-coffee"></i>
              <span class="menu-title">اسلایدر ها</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="sliders">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="{{route('admin.sliders')}}">نمایش</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('admin.sliders.create')}}">ایجاد</a>
                </li>
              </ul>
            </div>
          </li>

          
        </ul>
      </nav>