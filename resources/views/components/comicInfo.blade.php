@extends('layouts.default')

@section('metaTitle', 'Comic Info')


@section('mainContent')

    <!-- Jumbotron -->
    <section class="jumbotron">

        {{-- Wrapper comic img  --}}
        <div class="wrapper">

            {{-- Comic img --}}
            <figure class="comic_img">
                <img src="{{$comic['thumb']}}" alt="">
            </figure>
        </div>

    </section>

    {{-- Banner blue --}}
    <div class="banner_blue"></div>

    {{-- Container --}}
    <div class="container_comic">
        
        {{-- Comic description --}}
        <div class="description_comic">
            <h2>{{$comic['title']}}</h2>

            {{-- Banner green --}}
            <div class="banner_green">

                {{-- Price wrapper --}}
                <div class="price_wrapper">
                    <p>U.S. Price: <span>{{$comic['price']}}</span></p>
                    <p>Available</p>
                </div>

                {{-- Check availability --}}
                <div class="available">
                    <p>Check Availability</p>
                </div>

            </div>

            <p>{{$comic['description']}}</p>
        </div>

        {{-- Adv --}}
        <div class="adv">
            <img src="{{asset('img/adv.jpg')}}" alt="">
        </div>
    </div>

@endsection