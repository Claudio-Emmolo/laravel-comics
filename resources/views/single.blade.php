@extends('layouts.app')

@section('main-app')
<main id="single">
    <section id="comics-single-info" class="position-relative">
        @php
        $singleComic = $comicList[0];
        @endphp
        <div class="comic-thumb">
            <div class="container">
                <img src="{{$singleComic['thumb']}}" alt="">
            </div>
        </div>
        
        <section id="info-single-comic" class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-8">
                        <h2 class="text-uppercase">{{$singleComic['title']}}</h2>

                        <div class="price-box my-3 p-3">
                            <div class="row">
                                <div class="col-8 d-flex justify-content-between">
                                    <div class="price">
                                        <span class="text-opacity">U.S. Price </span> <span class="fw-bold">{{$singleComic['price']}}</span>
                                    </div>
                                    <span class="text-opacity text-uppercase">Available</span>
                                </div>
                                <div class="col-4 text-center">
                                    <span class="fs-6 fw-bold">Check Availability</span>
                                </div>
                            </div>
                        </div>

                        <p>{{$singleComic['description']}}</p>
                    </div>
                    <div class="col-4">
                        <img src="{{Vite::asset('resources/assets/images/adv.jpg')}}" alt="{{$singleComic['series']}}" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>

        <section id="other-info-comic">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <div class="talent">
                            <div class="info-title">
                                <h3>Talent</h3>
                            </div>
                            <div class="single-info d-flex">
                                <div class="w-50">
                                    <span class="d-block">Art By:</span>
                                </div>
                                <div class="w-75">

                                    <p class="ps-3 spec-text-blue">
                                        @foreach ($singleComic['artists'] as $artist)
                                        {{$artist}}
                                        @endforeach
                                    </p>
                                </div>
                            </div>
                            <div class="single-info d-flex">

                                <div class="w-50">
                                    <span class="d-block">Art By:</span>
                                </div>
                                <div class="w-75">

                                    <p class="ps-3 spec-text-blue">
                                        @foreach ($singleComic['writers'] as $writer)
                                        {{$writer}}
                                        @endforeach
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-6">
                        <div class="spec">
                            <div class="info-title">
                                <h3>Specs</h3>
                            </div>
                            <div class="single-info d-flex">
                                <p>
                                    <span>Series:</span> <span class="text-uppercase fw-bold spec-text-blue">{{$singleComic['series']}}</span>
                                </p>
                            </div>
                            <div class="single-info d-flex">
                                <p>
                                    <span>U.S. Price:</span> <span>{{$singleComic['price']}}</span>
                                </p>
                            </div>
                            <div class="single-info d-flex">
                                <p>
                                    <span>On Sale Date:</span> <span>{{$singleComic['sale_date']}}</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
    </section>
</main>
@endsection