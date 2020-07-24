<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" type="text/css" href="{{ url('front/css/StyleCategory.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('front/css/styleArticles.css') }}"> -->
    <link rel="stylesheet" type="text/css" href="{{ url('front/css/styleArticles.css') }}">

</head>

<body>

    @extends('front.index')
    @section('title')
    @section('content')


    <!-- <div class="container text-right"> -->

    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}" class="text-decoration-none">خانه</a></li>
                <li class="breadcrumb-item active" aria-current="page"> حیوانات</li>
            </ol>
        </nav>
    </div>





    <div class="container">
        <div class="row">
            @foreach($articles as $article)
            <div class="cardItem col-md-4 col-sm-6 col-xs-12 mt-4 "
                style="box-shadow: 0 5px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19) !important;">
                <div>
                    <img class="card-img-top" width="250px" height="250px"
                        src="<?php echo '/storage/photos/1/thumbs/'.basename($article->image) ?>" alt="Card image cap">
   
                        <div>
                            <a class="text-decoration-none" href="{{ route('article', $article->slug) }}"><h2 class="mt-3 text-right byekan">{{ $article->title }}</h2></a>
                        </div>
                        
                        <dl>
                            <dt class="text-right mt-3 byekan">
                                تاریخ : {!! jdate($article->created_at)->format('%A, %d %B %y') !!}
                            </dt>
                        </dl>

                    <div class="contergent">
                        <p class=" text-justify iransans"><?php echo mb_substr(strip_tags($article->description),0,200,'utf8').' [...]' ?></p>
                    </div>

                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="pagination m-4">
        {{ $articles->links() }}
    </div>
    <!-- Card Wider -->




    <!-- 
        <div class="row">

            <div class="col-lg-12 blog__content mb-72 text-right">
                <div class="content-box">

                    <article class="container article">
                        <div class="posts">
                            @foreach($articles as $article)

                            <div class=" col-md-4 col-sm-6 col-xs-12 mt-4 artcle">
                                <a href="{{ route('article', $article->slug) }}" class="text-decoration-none">
                                    <div class="card-img w-100"><img
                                            src="<?php echo '/storage/photos/1/thumbs/'.basename($article->image) ?>"
                                            alt="reactjs"></div>
                                    <div class="title_card mt-2 mb-3">
                                        <h3>{{ $article->title }}</h3>
                                    </div>
                                    <dl>
                                        <dt>
                                            - تاریخ : {!! jdate($article->created_at)->format('%A, %d %B %y') !!}
                                        </dt>
                                    </dl>


                                    <div class="body_card">
                                        <p class="text-justify">
                                            <?php echo mb_substr(strip_tags($article->description),0,200,'utf8').' [...]' ?>
                                        </p>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                        </div>
                        <div class="pagination">
                            {{ $articles->links() }}
                        </div>
                    </article>


                </div>
            </div>

        </div>


    </div> -->



    @endsection

</body>

</html>
