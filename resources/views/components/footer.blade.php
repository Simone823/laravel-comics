@php
    // Array Link 1
    $arrayLink1 = [
        [
            'href' => "#",
            'link' => "Characters",
        ],

        [
            'href' => "#",
            'link' => "Comics",
        ],

        [
            'href' => "#",
            'link' => "Movies",
        ],

        [
            'href' => "#",
            'link' => "TV",
        ],

        [
            'href' => "#",
            'link' => "Games",
        ],

        [
            'href' => "#",
            'link' => "Videos",
        ],

        [
            'href' => "#",
            'link' => "News",
        ],
    ];

    // Array 'Link' 2
    $arrayLink2 = [
        [
            'href' => "#",
            'link' => "Shop DC",
        ],

        [
            'href' => "#",
            'link' => "Shop DC Collectibles",
        ],
    ];

    // Array 'Link'3
    $arrayLink3 = [
        [
            'href' => "#",
            'link' => "Terms Of Use",
        ],

        [
            'href' => "#",
            'link' => "Terms Of Use",
        ],

        [
            'href' => "#",
            'link' => "Privacy policy (New)",
        ],

        [
            'href' => "#",
            'link' => "Ad Choise",
        ],

        [
            'href' => "#",
            'link' => "Advertising",
        ],

        [
            'href' => "#",
            'link' => "Jobs",
        ],

        [
            'href' => "#",
            'link' => "Subscriptions",
        ],

        [
            'href' => "#",
            'link' => "Talent Workshops",
        ],

        [
            'href' => "#",
            'link' => "CPSC Certificates",
        ],

        [
            'href' => "#",
            'link' => "Ratings",
        ],

        [
            'href' => "#",
            'link' => "Shop Help",
        ],

        [
            'href' => "#",
            'link' => "Contact Us",
        ],
    ];

    // Array 'Link' 4
    $arrayLink4 = [
        [
            'href' => "#",
            'link' => "DC",
        ],

        [
            'href' => "#",
            'link' => "MAD Magazine",
        ],

        [
            'href' => "#",
            'link' => "DC Kids",
        ],

        [
            'href' => "#",
            'link' => "DC Universe",
        ],

        [
            'href' => "#",
            'link' => "DC Power Visa",
        ],
    ];
@endphp

{{-- Footer --}}
<footer>

    {{-- wrapper footer --}}
    <div class="wrapper_footer">

        <!-- Container -->
        <div class="container">
            <!-- Wrapper list -->
            <div class="wrapper">
    
                <!-- Lista ul 1  -->
                <div class="list-1-wrapper">
                    <h1>Dc Comics</h1>
                    <ul>
                        @foreach ($arrayLink1 as $element) 
                            <li>
                                <a href="{{$element['href']}}">{{$element['link']}}</a>
                            </li>
                        @endforeach
                    </ul>
    
                    <!-- Lista ul 2 -->
                    <h1>Shop</h1>
                    <ul>
                        @foreach ($arrayLink2 as $element) 
                            <li>
                                <a href="{{$element['href']}}">{{$element['link']}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
    
                <!-- Lista ul 3 -->
                <div class="list-2-wrapper">
                    <h1>Dc</h1>
                    <ul>
                        @foreach ($arrayLink3 as $element) 
                            <li>
                                <a href="{{$element['href']}}">{{$element['link']}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
    
                <!-- Lista ul 4 -->
                <div class="list-3-wrapper">
                    <h1>Sites</h1>
                    <ul>
    
                        @foreach ($arrayLink4 as $element) 
                            <li>
                                <a href="{{$element['href']}}">{{$element['link']}}</a>
                            </li>
                        @endforeach
    
                    </ul>
                </div>
            </div>
    
            <!-- Wrapper Logo -->
            <div class="wrapper logo_dc">
    
            </div>
    
        </div>

    </div>

    {{-- Nav --}}
    <nav>
        <div class="container">
            <!-- Button -->
            <div class="button">
                <button>Sign-Up Now!</button>
            </div>
    
            <!-- Social -->
            <div class="social">
                <h2>Follow Us</h2>
                <ul>
                    <li>
                        <a href="/"><img src="{{asset('img/footer-facebook.png')}}" alt=""></a>
                    </li>
                    <li>
                        <a href="/"><img src="{{asset('img/footer-twitter.png')}}" alt=""></a>
                    </li>
                    <li>
                        <a href="/"><img src="{{asset('img/footer-youtube.png')}}" alt=""></a>
                    </li>
                    <li>
                        <a href="/"><img src="{{asset('img/footer-pinterest.png')}}" alt=""></a>
                    </li>
                    <li>
                        <a href="/"><img src="{{asset('img/footer-periscope.png')}}" alt=""></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</footer>
