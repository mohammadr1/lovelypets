<div class="slideshow">
    @foreach($sliders as $slider)
    <div class="slide">
        <div class="w-50">
            <a href="{{ $slider->url }}"><img src="{{ $slider->image }}" height="557px" alt=""></a>
        </div>
        <div class="w-50">
            <h2 class="ml-5 text-center p-2 text-dark">{{ $slider->title }}</h2>
        </div>
    </div>
    @endforeach

    <a class="prev" onclick="move(-1)">&#10095</a>
    <a class="next" onclick="move(1)">&#10094</a>

    <div class="items">
        @foreach($sliders as $slider)
        <div class="item">
            <div class="item-inner"></div>
        </div>
        @endforeach
    </div>
    
</div>

<div class="form-inline col-md-12">
        <div class="container">
            <form action="{{ route('search') }}" method="get">
                <input type="text" name="keyword" class="searchInput iranyekan" placeholder="دنبال چی میگردی....">
                <div class="search"></div>
            </form>
        </div>
        </div>