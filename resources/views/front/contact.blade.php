<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ url('front/css/styleArticle.css') }}">
</head>

@extends('front.index')
@section('title')
@section('content')


<!-- <div class="container text-right"> -->

<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}" class="text-decoration-none">خانه</a></li>
            <li class="breadcrumb-item active" aria-current="page"> تماس با ما</li>
        </ol>
    </nav>
</div>

<style>
    
html {
	position: absolute;
	overflow-x: hidden !important;
	width: 100% !important; 
}

body {
	overflow-x: hidden !important;
	width: 100% !important;
}

@media (min-width: 768px) {
	.container {
		max-width: 100% !important;
	}
}

@media (min-width: 576px)
.container {
    max-width: 720px;
}

</style>



<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="img">
                <img src="/storage/photos/1/360suite-contact-banner.jpg" alt="Image" width="100%" >
            </div>
            <div class="mt-4 text-right">
                <h3 class="byekan"><span style="font-size: 32px; color:#2573ab;">تماس با ما</span></h3>
                <div style="font-size: 40px;position: absolute; color: #00c4ff; line-height: 5px;"><span>----</span></div>
            </div>
            <div class="col-md-8 mt-5 float-right">
                <p class="text-justify iransans">
                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                </p>
            </div>
            <div class="col-md-4 float-right">
                <img src="/storage/photos/1/contactus.png" width="100%" alt="">
            </div>
            
        </div>
        <div class="col-md-12 text-center">
            <h5 class="byekan">ما را در شبکه های اجتماعی دنبال کنید</h5>
            
        </div>
        <div style="margin: 0 auto">
                <a href="#" class="mb-4" data-toggle="tooltip" data-placement="bottom" title="instagram"><i class="fa fa-instagram fa-2x" style="padding: 10px 0 5px 10px; margin-bottom: 10px;"></i></a> 
                <a href="#" class="mb-4" data-toggle="tooltip" data-placement="bottom" title="telegram"><i class="fa fa-telegram fa-2x" style="padding: 10px 0 5px 10px; margin-bottom: 10px;"></i></a> 
                <a href="#" class="mb-4" data-toggle="tooltip" data-placement="bottom" title="twitter"><i class="fa fa-twitter fa-2x" style="padding: 10px 0 5px 10px; margin-bottom: 10px;"></i></a> 
                <a href="#" class="mb-4" data-toggle="tooltip" data-placement="bottom" title="google"><i class="fa fa-google fa-2x" style="padding: 10px 0 5px 10px; margin-bottom: 10px;"></i></a> 
            </div>
    </div>
</div>

<div class="pagination m-4">

</div>





@endsection
