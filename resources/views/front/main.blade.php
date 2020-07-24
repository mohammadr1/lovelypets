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
Lovelypets
@endsection

@section('content')

<div>


    <!-- <img src="{{url('front/image/background2.png')}}"> -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="rgb(0,191,143)" fill-opacity="1" d="M0,192L34.3,208C68.6,224,137,256,206,250.7C274.3,245,343,203,411,192C480,181,549,203,617,213.3C685.7,224,754,224,823,202.7C891.4,181,960,139,1029,144C1097.1,149,1166,203,1234,192C1302.9,181,1371,107,1406,69.3L1440,32L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
    </svg>
    <div class="text-center bg-color-green" >
        <h1 class="byekan">سگ ها</h1>
        <span class="byekan">آنچه باید درباره سگ ها بدانید</span>
    </div>
    
    <div class="container bg-color-green" >
        <div class="card-deck">
            @foreach($article_Dog as $article)

            <div class="cardItem col-md-4 col-sm-6 col-xs-12 mt-4 bg-color-dark" >
                <img class="card-img-top" src="<?php echo '/storage/photos/1/thumbs/'.basename($article->image) ?>"
                    alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title text-center text-white byekan">{{ $article->title }}</h5>
                    <p class="text-justify iransans text-white">
                        <?php echo mb_substr(strip_tags($article->description),0,200,'utf8').' [...]' ?></p>
                    <a href="{{route('article', $article->slug)}}" class="btn btn-success col-md-12">بیشتر</a>
                </div>
            </div>

            @endforeach
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
  <path fill="rgb(0, 191,143)" fill-opacity="1" d="M0,192L34.3,208C68.6,224,137,256,206,250.7C274.3,245,343,203,411,192C480,181,549,203,617,213.3C685.7,224,754,224,823,202.7C891.4,181,960,139,1029,144C1097.1,149,1166,203,1234,192C1302.9,181,1371,107,1406,69.3L1440,32L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"></path>
</svg>
</div>

<div>
    <!-- <img src="{{url('front/image/background2.png')}}"> -->
    <div class="text-center mt-2">
        <h1 class="byekan">گربه ها</h1>
        <span class="byekan">آنچه باید درباره گربه ها بدانید</span>
    </div>
    <div class="container mb-5">
        <div class="mt-3 ">
            <div class="card-deck">
                @foreach($article_Cat as $article)

                <div class="cardItem col-md-4 col-sm-6 col-xs-12 mt-4 ">
                    <img class="card-img-top" src="<?php echo '/storage/photos/1/thumbs/'.basename($article->image) ?>"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title text-center byekan">{{ $article->title }}</h5>
                        <p class="text-justify iransans">
                            <?php echo mb_substr(strip_tags($article->description),0,210,'utf8').' [...]' ?></p>
                        <a href="{{route('article', $article->slug)}}" class="btn btn-success col-md-12">بیشتر</a>
                    </div>
                </div>

                @endforeach
            </div>
        </div>

    </div>

</div>

<div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="rgb(53, 63, 91)" fill-opacity="1" d="M0,256L60,240C120,224,240,192,360,186.7C480,181,600,203,720,224C840,245,960,267,1080,261.3C1200,256,1320,224,1380,208L1440,192L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
    </svg>
    <div class="container">
        <div class="row bg-color-dark">
            <div class="col-md-4 col-sm-12 text-center mt-2 mb-2">
                @foreach($article_Parande as $parande)
                <h2 class=" text-center byekan">پرندگان</h2>
                <div class="parent">
                    <img class="img" src="<?php echo '/storage/photos/1/thumbs/'.basename($parande->image) ?>" width="100%" height="100%" alt="Inages">
                    <div class="child">
                        <a class="btn btn-danger byekan" href="{{route('article', $parande->slug)}}">بیشتر</a>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="col-md-4 col-sm-12 text-center mt-2 mb-2">
                @foreach($article_Khazande as $khazande)
                <h2 class=" text-center byekan">خزندگان</h2>
                <div class="parent">
                    <img class="img" src="<?php echo '/storage/photos/1/thumbs/'.basename($khazande->image) ?>" width="100%" height="100%" alt="Inages">
                    <div class="child">
                        <a class="btn btn-danger byekan" href="{{route('article', $khazande->slug)}}">بیشتر</a>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="col-md-4 col-sm-12 text-center mt-2 mb-2">
                @foreach($article_Javande as $javande)
                <h2 class=" text-center byekan">جوندگان</h2>
                <div class="parent">
                    <img class="img" src="<?php echo '/storage/photos/1/thumbs/'.basename($javande->image) ?>" width="100%" height="100%" alt="Inages">
                    <div class="child">
                        <a class="btn btn-danger byekan" href="{{route('article', $javande->slug)}}">بیشتر</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-sm-12 text-center bg-color-dark">
                <div class="parent">
                    <img class="img" src="{{url('front/image/fish.png')}}" width="100%" height="260px">
                    <div class="child">
                        <a class="btn btn-success byekan" href="{{ route('categories') }}">ماهی های آکواریومی</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="rgb(53, 63,91)" fill-opacity="1" d="M0,256L60,240C120,224,240,192,360,186.7C480,181,600,203,720,224C840,245,960,267,1080,261.3C1200,256,1320,224,1380,208L1440,192L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path>
    </svg>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12 text-center mt-2 mb-2">
        @foreach($articleNewRand as $article)
            <div class="col-md-5 float-right ">
                <h3 class="p-3 byekan">داستان های جذاب حیوانات</h3>
                <p class="text-justify pt-2 pr-3 br-1 ">
                    <p class=" text-justify iransans"><?php echo mb_substr(strip_tags($article->description),0,200,'utf8').' [...]' ?></p>
                </p>
                <a href="{{ route('article', $article->slug) }}" class="btn btn-warning byekan">بیشتر</a>
            </div>
            <div class="col-md-7 float-right">
                <img width="100%" height="328" src="<?php echo '/storage/photos/1/thumbs/'.basename($article->image) ?>" width="100%" alt="">
            </div>
            @endforeach
        </div>
    </div>
</div>



<div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12 mt-2 mb-2">
            <div class="col-md-6 float-right bg-light text-center ">
                <h3 class="p-3 byekan">جدیدترین مطالب</h3>
                @foreach($articles_New as $article)
                <div class="row">
                    <div class="col-md-4 float-right">
                        <img class="mt-2 mb-2 col-sm-12 rounded " width="130" height="130"
                            src="{{ $article->image }}" alt="Image">
                    </div>
                    <div class="col-md-8 float-right text-justify mt-4">
                        <h5 class="byekan">{{ $article->title }}</h5>
                        <p class="iransans">
                            <?php 
                                echo mb_substr(strip_tags($article->description),0,130,'utf8')."..."
                            ?>
                            <a class="iranyekan" href="{{route('article', $article->slug)}}">بیشتر</a>
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="col-md-6 float-right bg-light text-center">
                <h3 class="p-3 byekan">محبوب ترین مطالب</h3>
                @foreach($articles_Popular as $article)
                <div class="row">
                    <div class="col-md-4 float-right">
                        <img class="mt-2 mb-2 col-sm-12 rounded " width="130" height="130"
                            src="{{$article->image}}" alt="Image">
                    </div>
                    <div class="col-md-8 float-right text-justify mt-4">
                        <h5 class="byekan">{{ $article->title }}</h5>
                        <p class="iransans">
                            <?php 
                                echo mb_substr(strip_tags($article->description),0,130,'utf8')."..."
                            ?>
                            <a class="iranyekan" href="{{route('article', $article->slug)}}   ">بیشتر</a>
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>


@endsection

    
</body>
</html>