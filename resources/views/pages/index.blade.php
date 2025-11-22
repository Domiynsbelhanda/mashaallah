@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
    <!-- Hero Section Start -->
    <div id="home" class="hero parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <!-- Hero Content Start -->
                    <div class="hero-content">
                        <!-- Section Title Start -->
                        <div class="section-title dark-section">
                            <h3 class="wow fadeInUp">Bienvenue sur le site de notre quincaillerie</h3>
                            <h1 class="text-anime-style-2" data-cursor="-opaque">
                                <span>
                                    MASHAALLAH
                                </span>
                                <span style="font-weight: normal!important;">BUSINESS SARLU</span>
                            </h1>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">
                                Nous vous proposons une large gamme d’outils, matériaux et équipements
                                de qualité pour accompagner vos travaux de construction, de rénovation
                                et de bricolage — avec des conseils fiables et un service rapide.
                            </p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Hero Button Start -->
                        <div class="hero-btn wow fadeInUp" data-wow-delay="0.4s">
                            <a href="#contact" class="btn-default"><span>Nous contacter</span></a>
                        </div>
                        <!-- Hero Button End -->
                    </div>
                    <!-- Hero Content End -->
                </div>

                <div class="col-lg-12">
                    <!-- Excellence Innovating List Start -->
                    <div class="excellence-innovating-list wow fadeInUp" data-wow-delay="0.6s">
                        <ul>
                            <li>Outils & Matériaux de qualité</li>
                            <li>Conseils professionnels</li>
                            <li>Produits disponibles immédiatement</li>
                        </ul>
                    </div>
                    <!-- Excellence Innovating List End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Section End -->

    <!-- About Us Start -->
    <div id="about" class="about-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- About Us Image Start -->
                    <div class="about-image">
                        <!-- About Image Start -->
                        <div class="about-img-1">
                            <figure class="image-anime reveal">
                                <img src="{{asset('images/about-img-1.jpg')}}" alt="">
                            </figure>
                        </div>
                        <!-- About Image End -->

                        <!-- About Image Start -->
                        <div class="about-img-2">
                            <figure class="image-anime reveal">
                                <img src="{{asset('images/about-img-2.jpg')}}" alt="">
                            </figure>
                        </div>
                        <!-- About Image End -->

                        <!-- Company Experience Start -->
                        <div class="company-experience">
                            <div class="company-experience-counter">
                                <h2><span class="counter">10</span>+</h2>
                            </div>
                            <div class="company-experience-content">
                                <p>années d’expérience</p>
                            </div>
                        </div>
                        <!-- Company Experience End -->
                    </div>
                    <!-- About Us Image End -->
                </div>

                <div class="col-lg-6">
                    <!-- About Content Start -->
                    <div class="about-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">À propos de nous</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">
                                Une quincaillerie proche de <span>vos besoins</span>
                            </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">
                                Depuis plusieurs années, nous accompagnons particuliers et professionnels
                                avec une sélection complète d’outils, matériaux et équipements adaptés
                                à tous les travaux. Notre priorité : la qualité, le conseil et la disponibilité.
                            </p>
                        </div>
                        <!-- Section Title End -->

                        <div class="about-content-body">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <!-- About List Btn Box Start -->
                                    <div class="about-list-btn">
                                        <!-- About Content List Start -->
                                        <div class="about-content-list wow fadeInUp" data-wow-delay="0.5s">
                                            <ul>
                                                <li>Produits fiables et durables</li>
                                                <li>Conseils professionnels</li>
                                                <li>Large choix en stock</li>
                                                <li>Service rapide et efficace</li>
                                            </ul>
                                        </div>
                                        <!-- About Content List End -->

                                        <!-- About Content Btn Start -->
                                        <div class="about-content-btn wow fadeInUp" data-wow-delay="0.75s">
                                            <a href="#contact" class="btn-default"><span>Nous contacter</span></a>
                                        </div>
                                        <!-- About Content Btn End -->
                                    </div>
                                    <!-- About List Btn Box End -->
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- About Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- About Us End -->

    <!-- What We Do Start -->
    <div id="services" class="what-we-do">
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="col-lg-6">
                    <!-- What We Do Content Start -->
                    <div class="what-we-do-content">
                        <!-- Section Title Start -->
                        <div class="section-title dark-section">
                            <h3 class="wow fadeInUp">Nos services</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">
                                Des solutions fiables pour <span>vos travaux & projets</span>
                            </h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- What We Do List Start -->
                        <div class="what-we-do-list">
                            <div class="what-we-do-list-box-1">

                                <!-- What We Do Item Start -->
                                <div class="what-we-do-item">
                                    <div class="icon-box">
                                        <img src="{{asset('images/icon-who-we-do-1.svg')}}" alt="">
                                    </div>
                                    <div class="what-we-item-content">
                                        <h3>Sous-traitance minière</h3>
                                        <p>
                                            Support logistique et fourniture de matériels adaptés aux
                                            opérations minières : outils, équipements, consommables,
                                            maintenance légère et interventions rapides sur site.
                                        </p>
                                    </div>
                                </div>
                                <!-- What We Do Item End -->

                                <!-- What We Do Item Start -->
                                <div class="what-we-do-item">
                                    <div class="icon-box">
                                        <img src="{{asset('images/icon-who-we-do-2.svg')}}" alt="">
                                    </div>
                                    <div class="what-we-item-content">
                                        <h3>Fourniture d’outils & matériaux</h3>
                                        <p>
                                            Large gamme d’outillage professionnel, matériaux de construction
                                            et accessoires pour tous vos travaux de bricolage, rénovation
                                            et chantier.
                                        </p>
                                    </div>
                                </div>
                                <!-- What We Do Item End -->

                            </div>

                            <div class="what-we-do-list-box-2">

                                <!-- What We Do Item Start -->
                                <div class="what-we-do-item">
                                    <div class="icon-box">
                                        <img src="{{asset('images/icon-who-we-do-3.svg')}}" alt="">
                                    </div>
                                    <div class="what-we-item-content">
                                        <h3>Électricité & plomberie</h3>
                                        <p>
                                            Vente de câbles, prises, disjoncteurs, robinets, raccords,
                                            tuyauterie et équipements essentiels pour installations ou réparations.
                                        </p>
                                    </div>
                                </div>
                                <!-- What We Do Item End -->

                                <!-- What We Do Item Start -->
                                <div class="what-we-do-item">
                                    <div class="icon-box">
                                        <img src="{{asset('images/icon-who-we-do-4.svg')}}" alt="">
                                    </div>
                                    <div class="what-we-item-content">
                                        <h3>Réparation & découpe</h3>
                                        <p>
                                            Service de réparation d’outils, affûtage, découpe de bois
                                            et de métaux, et assistance technique pour vos projets spécifiques.
                                        </p>
                                    </div>
                                </div>
                                <!-- What We Do Item End -->

                            </div>
                        </div>
                        <!-- What We Do List End -->

                        <!-- What We Do Footer Start -->
                        <div class="what-we-do-footer">
                            <p>
                                Nous mettons à votre disposition <span>des solutions fiables</span> adaptées
                                aux particuliers comme aux professionnels.
                            </p>
                        </div>
                        <!-- What We Do Footer End -->
                    </div>
                    <!-- What We Do Content End -->
                </div>

                <div class="col-lg-6">
                    <!-- What We Do Image Start -->
                    <div class="what-we-do-image">
                        <figure class="image-anime">
                            <img src="{{asset('images/what-we-do-image.jpg')}}" alt="">
                        </figure>
                    </div>
                    <!-- What We Do Image End -->
                </div>
            </div>
        </div>
    </div>
    <!-- What We Do End -->


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

    <!-- Our Testimonial Section Start -->
    <div class="our-testimonial">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Agency Support Slider Start -->
                    <div class="testimonial-company-slider">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <!-- Agency Support Logo Start -->
                                <div class="swiper-slide">
                                    <div class="company-logo">
                                        <img src="{{asset('images/stl-logo.png')}}" alt="">
                                    </div>
                                </div>
                                <!-- Agency Support Logo End -->

                                <!-- Agency Support Logo Start -->
                                <div class="swiper-slide">
                                    <div class="company-logo">
                                        <img src="{{asset('images/sncc-logo.png')}}" alt="">
                                    </div>
                                </div>
                                <!-- Agency Support Logo End -->

                                <!-- Agency Support Logo Start -->
                                <div class="swiper-slide">
                                    <div class="company-logo">
                                        <img src="{{asset('images/msf-logo.png')}}" alt="">
                                    </div>
                                </div>
                                <!-- Agency Support Logo End -->


                                <!-- Agency Support Logo Start -->
                                <div class="swiper-slide">
                                    <div class="company-logo">
                                        <img src="{{asset('images/stl-logo.png')}}" alt="">
                                    </div>
                                </div>
                                <!-- Agency Support Logo End -->

                                <!-- Agency Support Logo Start -->
                                <div class="swiper-slide">
                                    <div class="company-logo">
                                        <img src="{{asset('images/sncc-logo.png')}}" alt="">
                                    </div>
                                </div>
                                <!-- Agency Support Logo End -->

                                <!-- Agency Support Logo Start -->
                                <div class="swiper-slide">
                                    <div class="company-logo">
                                        <img src="{{asset('images/msf-logo.png')}}" alt="">
                                    </div>
                                </div>
                                <!-- Agency Support Logo End -->
                            </div>
                        </div>
                    </div>
                    <!-- Agency Support Slider End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Testimonial Section End -->


    <!-- Page Contact Us Start -->
    <div id="contact" class="page-contact-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <!-- Contact Information Start -->
                    <div class="contact-information">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Contactez-<span>nous</span></h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- Contact Info Box Start -->
                        <div class="contact-info-box">
                            <!-- Page Contact Item Start -->
                            <div class="contact-info-item wow fadeInUp">
                                <div class="icon-box">
                                    <img src="{{asset('images/icon-phone.svg')}}" alt="">
                                </div>
                                <div class="contact-info-content">
                                    <h3>contact</h3>
                                    <p>+243 995 893 713</p>
                                </div>
                            </div>
                            <!-- Page Contact Item End -->

                            <!-- Page Contact Item Start -->
                            <div class="contact-info-item wow fadeInUp" data-wow-delay="0.25s">
                                <div class="icon-box">
                                    <img src="{{asset('images/icon-mail.svg')}}" alt="">
                                </div>
                                <div class="contact-info-content">
                                    <h3>Email</h3>
                                    <p>info@mashaallahbusinesssarlu.com</p>
                                </div>
                            </div>
                            <!-- Page Contact Item End -->

                            <!-- Page Contact Item Start -->
                            <div class="contact-info-item wow fadeInUp" data-wow-delay="0.5s">
                                <div class="icon-box">
                                    <img src="{{asset('images/icon-location.svg')}}" alt="">
                                </div>
                                <div class="contact-info-content">
                                    <h3>Notre Adresse</h3>
                                    <p>Av. KAPENDA (Entre Des Usines et Moero), a côté du Centre des Impôts de Lubumbashi (CDI).</p>
                                </div>
                            </div>
                            <!-- Page Contact Item End -->
                        </div>
                    </div>
                    <!-- Contact Information End -->
                </div>

                <div class="col-lg-7">
                    <!-- Google Map Start -->
                    <div class="google-map">
                        <div class="container-flude">
                            <div class="row">
                                <div class="col-lg-12">
                                    <!-- Google Map Start -->
                                    <div class="google-map-iframe">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d690.7253876544858!2d27.482675662221137!3d-11.670806845479273!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19723fe4e195d99b%3A0x5c04075e8b3b71fa!2sCentre%20des%20Imp%C3%B4ts%20de%20Lubumbashi!5e0!3m2!1sfr!2scd!4v1763564822128!5m2!1sfr!2scd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                    <!-- Google Map End -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Google Map End -->
                </div>
            </div>
        </div>
    </div>
    <!--  Page Contact Us End -->
@endsection
