<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ url('front/css/styleArticles.css') }}">


</head>

<body>

    @extends('front.index')
    @section('title')
    دسته بندی ها
    @endsection
    @section('content')


    <div class="container text-right">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}" class="text-decoration-none">خانه</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="{{route('categories')}}"
                        class="text-decoration-none"> &nbsp&nbspدسته بندی ها </a></li>
                <li class="breadcrumb-item ">
                    {{ $category->name }}
                </li>


            </ol>
        </nav>



        <div class="container">
        @if(!empty($subCategories))
            <div class="row mt-5 brd-m">
                <h3 class="w-100 p-3 text-center byekan">دسته بندی </h3>
                @foreach($subCategories as $category)
                    @include('front.parent_Category',['category'=>$category])
                @endforeach

            </div>
        @endif
            <div class="row mt-5 brd-m">


            <h3 class="w-100 p-3 text-center byekan">مطالب </h3>
                @foreach($articles as $article)
                <div class="cardItem col-md-4 col-sm-6 col-xs-12 mt-4"
                    >
                    <div>
                        <img class="card-img-top" width="250px" height="250px" src="{{ $article->image }}"
                            alt="Card image cap">
                        <div class="card-body">
                            <h1 class="card-title w-100 mt-2 mb-2 text-center byekan">{{ $article->title }}</h1>
                        </div>
                        <div class="card-footer text-center">
                            <a class="text-decoration-none byekan" href="{{ route('article', $article->slug) }}">
                                نمایش
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            

        </div>
        <!-- Card Wider -->

        <br>
    </div>



    @endsection


    <script src="{{ url('front/js/categoriesJs.js') }}"></script>

</body>

</html>
