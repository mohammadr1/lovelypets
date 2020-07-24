<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ url('front/css/styleArticle.css') }}">
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
            <li class="breadcrumb-item active" aria-current="page"> درباره ما</li>
        </ol>
    </nav>
</div>





<div class="container">
    <div class="row">
        <div class="col-md-12 text-right">
            <div class="img">
                <img src="/storage/photos/1/petshop-saadat-l6.jpg" alt="" width="100%" style="min-height:100px">
            </div>
            <div class="mt-4">
                <h3 class="byekan"><span style="font-size: 32px; color:#2573ab;">درباره LovelyPets</span></h3>
                <div style="font-size: 40px;position: absolute; color: #00c4ff; line-height: 5px;"><span>-------------</span></div>
            </div>
            <div class="col-md-7 mt-5 float-right">
                <p class="text-justify">
                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                </p>
            </div>
            <div class="col-md-5 float-right">
                <img src="/storage/photos/1/contentyab-team.png" width="100%" alt="">
            </div>
        </div>
    </div>
</div>

<div class="pagination m-4">

</div>





@endsection


</body>
</html>