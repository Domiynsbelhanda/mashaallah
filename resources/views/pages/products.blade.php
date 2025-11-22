@extends('layouts.app')

@section('title', 'Produits')

@section('content')
    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Nos <span>produits</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">Accueil</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Nos Produits</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Our Work Section Start -->
    <div id="products" class="our-work">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-6">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Nos <span> produits</span></h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-6">
                    <!-- Section Button Start -->
                    <div class="section-btn wow fadeInUp" data-wow-delay="0.25s">
                        <a href="{{route('products')}}" class="btn-default"><span>Tous nos produits</span></a>
                    </div>
                    <!-- Section Button End -->
                </div>
            </div>

            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="team-member-item wow fadeInUp">
                        <div class="team-image">
                            <figure class="image-anime">
                                <img src="{{asset('images/baguette.jpg')}}" alt="">
                            </figure>
                        </div>

                        <div class="team-content">
                            <h3>Baguettes</h3>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="team-member-item wow fadeInUp" data-wow-delay="0.25s">
                        <div class="team-image">
                            <figure class="image-anime">
                                <img src="{{asset('images/product-2.jpg')}}" alt="">
                            </figure>
                        </div>

                        <div class="team-content">
                            <h3>brooklyn simmons</h3>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="team-member-item wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-image">
                            <figure class="image-anime">
                                <img src="{{asset('images/product-3.jpg')}}" alt="">
                            </figure>
                        </div>

                        <div class="team-content">
                            <h3>cameron williamson</h3>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="team-member-item wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-image">
                            <figure class="image-anime">
                                <img src="{{asset('images/product-4.jpg')}}" alt="">
                            </figure>
                        </div>

                        <div class="team-content">
                            <h3>darlene robertson</h3>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6">
                    <div class="team-member-item wow fadeInUp">
                        <div class="team-image">
                            <figure class="image-anime">
                                <img src="{{asset('images/product-5.jpg')}}" alt="">
                            </figure>
                        </div>

                        <div class="team-content">
                            <h3>sophia white</h3>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="team-member-item wow fadeInUp" data-wow-delay="0.25s">
                        <div class="team-image">
                            <figure class="image-anime">
                                <img src="{{asset('images/product-6.jpg')}}" alt="">
                            </figure>
                        </div>

                        <div class="team-content">
                            <h3>Bottes</h3>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="team-member-item wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-image">
                            <figure class="image-anime">
                                <img src="{{asset('images/product-7.jpg')}}" alt="">
                            </figure>
                        </div>

                        <div class="team-content">
                            <h3>Reflettants et Tenus de travail</h3>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="team-member-item wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-image">
                            <figure class="image-anime">
                                <img src="{{asset('images/product-8.jpg')}}" alt="">
                            </figure>
                        </div>

                        <div class="team-content">
                            <h3>ryan wright</h3>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <!-- Our Work Section End -->
@endsection
