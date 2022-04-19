<!-- Jumbotron -->
<section class="jumbotron">
    <div class="container">
        <button>Current Series</button>
    </div>
</section>

<!-- Contenuto parte centrale sfondo nero -->
<section class="bkg-black">

    <!-- Container -->
    <div class="cards_wrapper">
        @foreach ($comics as $element)
            <!-- Card -->
            <div class="card">
                <figure class="card_img">
                    <img src="{{$element['thumb']}}">
                </figure>
                <p class="series">{{$element['series']}}</p>
                <p class="type">{{$element['type']}}</p>
                <p class="price">{{$element['price']}}</p>
            </div>
        @endforeach
    </div>   

    <!-- Button load more -->
    <div class="btn">
        <button>Load More</button>
    </div>
</section>