<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ url('front/css/styleArticle.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('front/css/styleeeeee.css') }}">
</head>

<body>


    @extends('front.index')
    @section('title')
    {{$article->name}}
    @endsection
    
    
    @section('content')
  
    <div class="container text-right">


        <nav aria-label="breadcrumb">
            <ol class="breadcrumb ">
                <li class="breadcrumb-item"><a href="{{route('home')}}" class="text-decoration-none">خانه</a></li>&nbsp / &nbsp
                <li class="breadcrumb-item"><a href="{{route('articles')}}" class="text-decoration-none">حیوانات</a></li>
                <li class="breadcrumb-item ">
                    @foreach($article->categories()->pluck('name') as $category)
                    <a href="{{ route('categories') }}" class="text-decoration-none">
                        {{ $category }}
                    </a>
                    @endforeach
                </li>
                <li aria-current="page">{{$article->title}}</li>
            </ol>
        </nav>

        @include('front.messages')

    </div>



    <div class="main-container container" id="main-container">

        <!-- Content -->
        <div class="row">

            <!-- post content -->
            <div class="col-lg-8 blog__content mb-72 text-right">
                <div class="content-box">

                    <!-- standard post -->
                    <article class="entry mb-0">

                        <div class="single-post__entry-header entry__header">
                            <h1 class="single-post__entry-title byekan">
                                {{ $article->title }}
                            </h1>

                            <div class="entry__meta-holder">
                                <ul class="entry__meta">
                                    <li class="entry__meta-date byekan">
                                        {!! jdate($article->created_at)->format('%A, %d %B %Y') !!}
                                    </li>
                                </ul>

                                <ul class="entry__meta">
                                    <li class="entry__meta-views byekan">
                                        <i class="fa fa-eye"></i>
                                        <span>{{ $article->hit }}</span>
                                    </li>
                                </ul>
                            </div>
                        </div> <!-- end entry header -->

                        <div class="entry__img-holder">
                            <img src="{{ $article->image }}" alt="Article {{$article->title }}" class="entry__img" width="100%" height="500px">
                        </div>

                        <div class="entry__article-wrap">

                            <div class="entry__article">
                                <p class="text-justify mt-2 iransans" style="line-height:30px !important;">
                                    <?php 
                                        echo strip_tags($article->description)
                                    ?>
                                </p>
                            </div> <!-- end entry article -->
                        </div> <!-- end entry article wrap -->

                        <!-- Related Posts -->
                    </article> <!-- end standard post -->


                </div> <!-- end content box -->
            </div> <!-- end post content -->

            <!-- Sidebar -->
            <aside class="col-lg-4 sidebar sidebar--right text-right">

                <!-- Widget Newsletter -->
                <aside class="widget widget-popular-posts">
                    <h4 class="widget-title byekan">مطالب مرتبط</h4>
                    <hr>
                    <ul class="post-list-small">
                        @foreach($similar_article as $article_o)
                        @if($article->slug !=  $article_o->slug)
                        <li class="post-list-small__item text-right">
                            <article class="post-list-small__entry clearfix">
                                <div class="post-list-small__img-holder">
                                    <div class="thumb-container thumb-100">
                                        <a href="{{route('article', $article_o->slug)}}">
                                            <img width="100" height="100" src="{{ $article_o->image }}" alt="" class="rounded lazyload">
                                        </a>
                                    </div>
                                </div>
                                <div class="post-list-small__body ">
                                    <h3 class="post-list-small__entry-title font-weight-bold pr-2">
                                        <a href="{{route('article', $article_o->slug)}}" class="w-100">{{ $article_o->title }}</a>
                                    </h3>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-date pr-2 pt-3">
                                            {!! jdate($article_o->created_at)->format('%A, %d %B %Y') !!}
                                        </li>
                                    </ul>
                                </div>
                            </article>
                        </li>
                        <hr>                 
                        @endif
                        @endforeach
                    </ul>
                </aside>  <!-- end widget newsletter -->

  


            </aside> <!-- end sidebar -->

        </div> <!-- end content -->
    </div> <!-- end main container -->



    <div>




        <!-- start Comments -->
        <div class="comment container text-right">
            <!-- Contenedor Principal -->
            <div class="comments-container">
                <hr>
                <h3 class="comments-title text-primary"><i class="fa fa-comments"> نظرات</i></h3>
                <ul id="comments-list" class="comments-list">
                    @foreach($comments as $comment)
                    <li>
                        <div class="comment-main-level" dir="rtl">
                            <!-- Avatar -->
                            <div class="comment-avatar"><img src="/storage/photos/1/blue-user-icon-32.jpg" alt=""></div>
                            <!-- Contenedor del Comentario -->
                            <div class="comment-box">
                                <div class="comment-head">
                                    <h6 class="comment-name by-author"><a href="#">{{$comment->name}}</a></h6>
                                    <span>{!! jdate($comment->created_at)->format('%A, %d %B %Y') !!}</span>

                                </div>
                                <div class="comment-content pt-4 pb-4 ">
                                    <p class="text-justify">{{ $comment->body }}</p>
                                </div>
                            </div>
                        </div>
                        <!-- Respuestas de los comentarios -->
                        <ul class="comments-list reply-list">
                            @if($comment->answer && !empty($comment->answer))
                            <li>
                                <!-- Avatar -->
                                <div class="comment-avatar"><img src="/storage/photos/1/avatar.png" alt=""></div>
                                <!-- Contenedor del Comentario -->
                                <div class="comment-box">
                                    <div class="comment-head">
                                        <h6 class="comment-name by-author-admin"><a
                                                href="http://creaticode.com/blog">پاسخ</a></h6>
                                        <span class="mr-2">{!! jdate($comment->created_at)->format('%A, %d %B %Y')
                                            !!}</span>
                                    </div>
                                    <div class="comment-content pt-4 pb-4">
                                        <?php echo strip_tags($comment->answer) ?>
                                    </div>
                                </div>
                            </li>
                            @endif
                        </ul>
                    </li>
                    @endforeach

                </ul>
            </div>
        </div>
        <!-- end Comments -->



        <hr>
        <form action="{{ route('comment.store', $article->slug) }}" method="post">
            @csrf
            <div class="container">
                <div class="form-row">
                    @auth
                    <div class="form-group col-md-6">
                        <label class="col-md-12 text-right" for="name">نام</label>
                        <input class="form-control" name="name" value={{Auth::user()->name}} readonly>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="col-md-12 text-right" for="name">ایمیل</label>
                        <input class="form-control" name="email" value={{Auth::user()->email}} readonly>
                    </div>
                    @else
                    <div class="form-group col-md-6">
                        <label class="col-md-12 text-right" for="name">نام</label>
                        <input class="form-control" name="name">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="col-md-12 text-right" for="name">ایمیل</label>
                        <input class="form-control" name="email">
                    </div>
                    @endauth
                    <div class="form-group col-md-12">
                        <label class="col-md-12 text-right" for="body">متن نظر شما</label>
                        <textarea class="form-control col-md-12" name="body" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-12 text-right" for="body">تصویر امنیتی</label>
                        {!! htmlFormSnippet() !!}
                    </div>
                    <div class="form-group col-md-2">
                        <input type="submit" class="form-control btn btn-success" value="ارسال نظر">
                    </div>
                </div>
            </div>
        </form>
    </div>



    @endsection


    <script src="{{ url('front/js/lazysizes.min.js') }}"></script>
</body>

</html>
