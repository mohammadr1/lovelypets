
<style>


.container .search {
  position: absolute;
  margin: auto;
  top: -45px;
  right: 0;
  bottom: 0;
  left: 0;
  width: 50px;
  height: 50px;
  background: crimson;
  border-radius: 50%;
  transition: all 1s;
  z-index: 4;
  box-shadow: 0 0 25px 0 rgba(0, 0, 0, 0.4);
}
.container .search:hover {
  cursor: pointer;
}
.container .search::before {
  content: "";
  position: absolute;
  margin: auto;
  top: 22px;
  right: 0;
  bottom: 0;
  left: 22px;
  width: 12px;
  height: 2px;
  background: white;
  transform: rotate(45deg);
  transition: all .5s;
}
.container .search::after {
  content: "";
  position: absolute;
  margin: auto;
  top: -5px;
  right: 0;
  bottom: 0;
  left: -5px;
  width: 25px;
  height: 25px;
  border-radius: 50%;
  border: 2px solid white;
  transition: all .5s;
}
.container .searchInput {
  font-family: 'iransans';
  font-size: 14px;
  position: absolute;
  margin: auto;
  top: -35px;
  right: 15px;
  bottom: 0;
  left: 0;
  width: 40px;
  height: 40px;
  outline: none;
  border: none;
  background: crimson;
  color: white;
  text-shadow: 0 0 10px crimson;
  padding: 0 80px 0 20px;
  border-radius: 30px;
  box-shadow: 0 0 25px 0 crimson, 0 20px 25px 0 rgba(0, 0, 0, 0.2);
  transition: all 1s;
  opacity: 0;
  z-index: 5;
  font-weight: bolder;
  letter-spacing: 0.1em;
}
.container .searchInput:hover {
  cursor: pointer;
}
.container .searchInput:focus {
  width: 300px;
  opacity: 1;
  cursor: text;
}
.container .searchInput:focus ~ .search {
  right: -250px;
  background: #151515;
  z-index: 6;
}
.container .searchInput:focus ~ .search::before {
  top: 0;
  left: 0;
  width: 25px;
}
.container .searchInput:focus ~ .search::after {
  top: 0;
  left: 0;
  width: 25px;
  height: 2px;
  border: none;
  background: white;
  border-radius: 0%;
  transform: rotate(-45deg);
}
.container input::placeholder {
  color: white;
  opacity: 0.5;
  font-weight: bolder;
}



.dropdown-menu {
  display: block;
  opacity: 0;
  visibility: hidden;
  transform: translateY(20%);
  transition: all
  .5s;
}
.dropdown-item {
  text-align: right !important;
}

@media (max-width: 768px){
  .dropdown .dropdown-menu{
      opacity: 1;
      text-align: right;
      visibility: visible;
      transform: translateY(0%);
      border:none;
  }
}

@media (max-width: 576px){
  .dropdown .dropdown-menu{
      opacity: 1;
      text-align: right;
      visibility: visible;
      transform: translateY(0%);
      border:none;
  }
}


.dropdown:hover .dropdown-menu{
    opacity: 1;
    text-align: right;
    visibility: visible;
    transform: translateY(0%);
}


</style>







<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top" 
    style="box-shadow: 0 0 4px 0 rgba(0,0,100,0.5),0 0 20px 0 rgba(0,0,0,0) !important;">
    <a class="navbar-brand" href="{{route('home')}}"><img src="/storage/photos/1/logoLovelyPets.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>



    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav col-md-8 text-right">
          @foreach($menus->where('parent_id', 0) as $menu)
            <li class="nav-item {{ $menus->where('parent_id', $menu->id)->count() > 0 ? 'dropdown' : ' ' }}">
                <a class="nav-link {{ $menus->where('parent_id', $menu->id)->count() > 0 ? 'dropdown-toggle' : ' ' }}" href="{{ $menu->url }}">{{ $menu->title }}</a>
                @foreach($menus->where('parent_id', $menu->id) as $submenu)
                  @if($loop->first)
                    <div class="dropdown-menu">
                  @endif
                        <a href="{{ $submenu->url }}" class="dropdown-item">{{ $submenu->title }}</a>
                    @if($loop->last)
                    </div>
                    @endif
                @endforeach
            </li>
          @endforeach
        </ul>
        
    </div>
</nav>











