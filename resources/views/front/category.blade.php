<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ url('front/css/StyleCategory.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('front/css/styleArticles.css') }}">
</head>

<body>


    @extends('front.index')
    @section('title')
    {{$category->name}}
    @endsection


    @section('content')

    <div class="container text-right">


        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}" class="text-decoration-none">خانه</a></li>
                <li class="breadcrumb-item"><a href="{{route('articles')}}" class="text-decoration-none">&nbsp&nbsp
                        حیوانات</a></li>
                <li class="breadcrumb-item"><a href="{{route('categories')}}" class="text-decoration-none">&nbsp&nbsp
                        دسته بندی</a></li>
                <li class="breadcrumb-item">

                </li>
                <li class="" aria-current="page">{{$category->name}}</li>
            </ol>
        </nav>

        @include('front.messages')

    </div>



    <div class="container">
        <div class="row">
            @foreach($category->articles as $article)
            <div class="cardItem col-md-4 col-sm-6 col-xs-12 mt-4 "
                style="box-shadow: 0 5px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19) !important;">
                <div>
                    <img class="card-img-top" width="250px" height="250px"
                        src="<?php echo '/storage/photos/1/thumbs/'.basename($article->image) ?>" alt="Card image cap">
   
                        <div>
                            <a href="{{ route('article', $article->slug) }}" class="text-decoration-none"><h3 class="text-right mt-2 mb-3 mr-2">{{ $article->title }}</h3></a>
                        </div>
                        
                        <dl>
                            <dt class="text-right mt-3">
                                تاریخ : {!! jdate($article->created_at)->format('%A, %d %B %y') !!}
                            </dt>
                        </dl>

                        <div class="body_card">
                        <p class="text-justify">
                            <?php echo mb_substr(strip_tags($article->description),0,210,'utf8').' [...]' ?></p>
                    </div>

                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="pagination m-4">
    </div>






    @endsection


    <script src="{{ url('front/js/lazysizes.min.js') }}"></script>
</body>

</html>
