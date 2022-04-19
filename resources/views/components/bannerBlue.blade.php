@php
    // Array menu link
    $menuLinks = [
        [
            'img' => "/img/buy-comics-digital-comics.png",
            'href' => "#",
            'text' => "Digital Comics",
        ],

        [
            'img' => "/img/buy-comics-merchandise.png",
            'href' => "#",
            'text' => "Dc Merchandise",
        ],

        [
            'img' => "/img/buy-comics-shop-locator.png",
            'href' => "#",
            'text' => "Subscription",
        ],

        [
            'img' => "/img/buy-comics-subscriptions.png",
            'href' => "#",
            'text' => "Comic Shop Locator",
        ],

        [
            'img' => "/img/buy-dc-power-visa.svg",
            'href' => "#",
            'text' => "Dc Power Visa",
        ],
    ];
@endphp

<!-- Sezione con sfondo azzurro -->
<section class="bkg-blue">
    <!-- Container -->
    <div class="container">
        <ul>
            @foreach ($menuLinks as $element)
                <li>
                    <figure class="logo">
                        <img src="{{$element['img']}}" alt="">
                    </figure>
                    <a href="{{$element['href']}}">{{$element['text']}}</a>
                </li>
            @endforeach
        </ul>
    </div>
</section>