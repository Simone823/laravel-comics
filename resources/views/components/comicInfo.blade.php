@extends('layouts.default');

@section('metaTitle', 'Comic Info');


@section('mainContent')

    <!-- Jumbotron -->
    <section class="jumbotron">
        <div class="container">
            {{-- <button>Current Series</button> --}}
        </div>
    </section>

    {{-- Container --}}
    <div class="container">

        @foreach ($comic as  $id => $element)

            {{-- Comic description --}}
            <div class="description_comic">
                <h2>{{$element['description']}}</h2>
            </div>
        
        @endforeach
    </div>

@endsection