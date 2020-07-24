
@foreach($subCategories as $category)

<div class="cardItem col-md-4 col-sm-6 col-xs-12 mt-4">
    <div >
        <img class="card-img-top" width="250px" height="250px" src="{{ $category->picture }}"
            alt="Card image cap">
        <div class="card-body">
            <h1 class="card-title w-100 mt-2 mb-2 text-center byekan">{{ $category->name }}</h1>
        </div>
        <div class="card-footer text-center">
            <a class="text-decoration-none byekan" href="{{ route('subcategories', $category->slug) }}">
                نمایش
            </a>
        </div>
    </div>
</div>

@endforeach
<hr>
