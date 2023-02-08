@extends('layouts.app')

@section('main-app')
<main id="home">
    <section id="comics-card" class="position-relative container">

        <div class="title-series-section">
            <h2 class="fs-3 m-0">Current Series</h2>
        </div>
        
        <div class="text-light pt-5">
            <div class="row row-cols-6">
                @foreach ($comicList as $comic)
                <div class="col single-card">
                    <div class="img-container overflow-hidden">
                        <a href="/single">
                            <img src="{{$comic['thumb']}}" alt="">
                        </a>
                    </div>
                    <h3 class="fs-6 fw-bold text-uppercase">
                        {{$comic['series']}}
                    </h3>
                </div>
                @endforeach
                <a href="#" class="btn btn-primary m-auto mb-5">Load More</a>
            </div>
        </div>
        
    </section>
</main>
@endsection
