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
                <li class="breadcrumb-item active" aria-current="page"> دسته بندی ها</li>
            </ol>
        </nav>



        <div class="container">
            <div class="row">
                @foreach($categories as $category)
                <div class="cardItem col-md-4 col-sm-6 col-xs-12 mt-4 " style="box-shadow: 0 5px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19) !important;">
                    <div >
                        <img class="card-img-top" width="250px" height="250px" src="{{ $category->picture }}"
                            alt="Card image cap">
                        <div class="card-body">
                            <h1 class="card-title w-100 mt-2 mb-2 text-center byekan">{{ $category->name }}</h1>
                        </div>
                        <div class="card-footer text-center">
                            <a class="text-decoration-none byekan" href="{{route('subcategories', $category->slug )}}">
                                نمایش همه </a>
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
