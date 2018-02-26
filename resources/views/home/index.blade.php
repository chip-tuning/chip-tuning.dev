@extends('layouts.app')

@section('title', 'Sabac, Srbija')
@section('description', 'Chip tuning, profesionalno uklanjanje DPF filtera i gašenje EGR ventila, rešenje problema sa toplim startom, brisanje grešaka, Sabac, Srbija i okolina.')

@section('facebook')
    <meta property="og:type" content="webiste">
    <meta property="og:title" content="{{ config('app.name', 'RPCT') }}">
    <meta property="og:description" content="Poboljšavamo performanse vašeg automobila, Chip Tuning, uklanjanje DPF filtera, gašenje EGR ventila, rešavanje problema sa toplim startom i selektivno brisanje grešaka.">
    <meta property="og:image" content="{{ asset('images/logo.jpg') }}">
@endsection

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/rev-slider.css') }}">
@endsection

@section('scripts')
<script type="text/javascript" src="{{ asset('js/rev-slider.js') }}"></script>
@endsection

@section('content')
<div id="home">
    @include('partials.slider')
    <section class="pv-30 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h2 class="text-center">Naše <strong>Usluge</strong></h2>
                    <div class="separator"></div>
                    <p class="large text-center">Racing performance Chip Tuning bavi se prvenstveno povecanjem snage vozila. Pored toga nudimo i niz propratnih usluga.</p>
                </div>
                <div class="col-md-12">
                    <h3 class="title">Chip Tuning</h3>
                    <div class="separator-2"></div>
                </div>
                <div class="col-md-6 space-top">
                    @component('components.groups')
                        @slot('delay', 25)
                        @slot('icon')
                            <i class="fa fa-arrows"></i>
                        @endslot
                        @slot('title', 'Automobili')
                        @slot('description', 'Chip Tuning za vozila koja poseduju turbo dizel ili turbo benzinski motor. Povećanje snage uz smanjenje potrošnje.')
                        @slot('link', '#')
                    @endcomponent
                    @component('components.groups')
                        @slot('delay', 50)
                        @slot('icon')
                            <i class="fa fa-arrows"></i>
                        @endslot
                        @slot('title', 'Kamioni')
                        @slot('description', 'Chip Tuningom kamiona dobija se značajno povećanje snage dok se potrošnja smanjuje do 3l, čime se postiže velika ušteda.')
                        @slot('link', '#')
                    @endcomponent
                    @component('components.groups')
                        @slot('delay', 25)
                        @slot('icon')
                            <i class="fa fa-arrows"></i>
                        @endslot
                        @slot('title', 'Poljoprivredne mašine')
                        @slot('description', 'Povećanje snage i smanjenje potrošnje moguće je postići i na poljoprivrednim mašinama.')
                        @slot('link', '#')
                    @endcomponent
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('images/service-image-1.png') }}" alt="Nase usluge">
                </div>
                @component('components.service')
                    @slot('icon')
                        <i class="fa fa-diamond"></i>
                    @endslot
                    @slot('title', 'DPF OFF')
                    @slot('description', 'Problem sa DPF filterom rešavamo trajno softverskim i fizičkim uklanjanjem.')
                    @slot('link', '#')
                @endcomponent
                @component('components.service')
                    @slot('icon')
                        <i class="fa fa-diamond"></i>
                    @endslot
                    @slot('title', 'EGR OFF')
                    @slot('description', 'Problem sa EGR ventilom rešavamo trajno softverskim gašenjem i fizičkim zatvaranjem.')
                    @slot('link', '#')
                @endcomponent
                @component('components.service')
                    @slot('icon')
                        <i class="fa fa-diamond"></i>
                    @endslot
                    @slot('title', 'DTC OFF')
                    @slot('description', 'Ukoliko se javi potreba vršimo selektivno brisanje grešaka iz motornog računara vozila.')
                    @slot('link', '#')
                @endcomponent
                @component('components.service')
                    @slot('icon')
                        <i class="fa fa-diamond"></i>
                    @endslot
                    @slot('title', 'AD Blue OFF')
                    @slot('description', 'Softversko gašenje AdBlue sistema kojim je opremljena većina vozila novije proizvodnje.')
                    @slot('link', '#')
                @endcomponent
                @component('components.service')
                    @slot('icon')
                        <i class="fa fa-diamond"></i>
                    @endslot
                    @slot('title', 'Swirl Flaps OFF')
                    @slot('description', 'Klapne usisne grane – Swirl/Flaps su veoma osetljive i često prouzrokuju probleme u radu motora.')
                    @slot('link', '#')
                @endcomponent
                @component('components.service')
                    @slot('icon')
                        <i class="fa fa-diamond"></i>
                    @endslot
                    @slot('title', 'Speed Limit OFF')
                    @slot('description', 'Neki proizvođači postavljaju ograničenje brzine na svoja vozila, taj limit je moguće ukinuti.')
                    @slot('link', '#')
                @endcomponent
                @component('components.service')
                    @slot('icon')
                        <i class="fa fa-diamond"></i>
                    @endslot
                    @slot('title', 'Topli Start OFF')
                    @slot('description', 'Veoma čest problem kod VAG grupacije. Kad motor postigne radnu temperaturu ne može da upali ili jako dugo vergla da bi upalio.')
                    @slot('link', '#')
                @endcomponent
                @component('components.service')
                    @slot('icon')
                        <i class="fa fa-diamond"></i>
                    @endslot
                    @slot('title', 'GPS Praćenje')
                    @slot('description', 'Satelitsko praćenje vozila u zemilji i inostranstvu, praćenje parametara motora, potrošnje, pređenog puta.')
                    @slot('link', '#')
                @endcomponent
                @component('components.service')
                    @slot('icon')
                        <i class="fa fa-diamond"></i>
                    @endslot
                    @slot('title', 'Dijagnostika')
                    @slot('description', 'Posedujemo najsavremenije dijagnostičke uređaje koji nam omogućavaju rad na vozilima poslednje generacije.')
                    @slot('link', '#')
                @endcomponent
            </div>
        </div>
    </section>
    @include('partials.calculator')
    <section class="pv-30">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h2 class="text-center">Zašto <strong>baš</strong> mi</h2>
                    <div class="separator"></div>
                    <p class="large text-center">Firma Racing Performance Chip Tuning bavi se prvenstveno povećanjem snage vozila uz smanjenje potrošnje. Ono što nas izdvaja u odnosu na ostale firme jeste oprema i software poslednje generacije koji nam omogućava brz, kvalitetan i efikasan rad.</p>
                    <br>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('images/section-image-1.png') }}" alt="Zasto bas mi">
                </div>
                <div class="col-md-6">
                    <p class="space-top">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At provident modi nobis dolores ratione, maiores beatae vel iste illo incidunt officia sed id cupiditate quasi excepturi</p>
                    @component('components.feature')
                        @slot('delay', 100)
                        @slot('icon')
                            <i class="fa fa-clock-o"></i>
                        @endslot
                        @slot('title', 'Brzina i efikasnost')
                        @slot('description', 'Čitanje i upis vrši se putem ODB konektora bez skidanja računara, uređajima poslednje generacije.')
                    @endcomponent
                    @component('components.feature')
                        @slot('delay', 100)
                        @slot('icon')
                            <i class="fa fa-tachometer"></i>
                        @endslot
                        @slot('title', 'Detaljna provera vozila')
                        @slot('description', 'Posedujemo uređaje poslednje generacije za kompletnu dijagnostiku vašeg vozila.')
                    @endcomponent
                    @component('components.feature')
                        @slot('delay', 100)
                        @slot('icon')
                            <i class="fa fa-car"></i>
                        @endslot
                        @slot('title', 'Rad na terenu')
                        @slot('description', 'Po potrebi, naša ekipa izalzi na teren na području Srbije, Hrvatske, Bosne i Hercegovine i ostalih EX-YU republika.')
                    @endcomponent
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h2>Šta <strong>nudimo</strong></h2>
                    <div class="separator-2"></div>
                    <p>Lorem ipsum dolor sit amet, lotrem <span class="text-default">some colored text</span>. Nulla explicabo <strong>attention to this</strong> blanditiis, ex cupiditate ipsam debitis rem.</p>
                    <ul class="list-icons">
                        <li class="object-non-visible animated object-visible fadeInUpSmall" data-animation-effect="fadeInUpSmall" data-effect-delay="100"><i class="fa fa-check-square-o"></i> 27 Predifined Home Pages</li>
                        <li class="object-non-visible animated object-visible fadeInUpSmall" data-animation-effect="fadeInUpSmall" data-effect-delay="150"><i class="fa fa-check-square-o"></i> 14 Header Options</li>
                        <li class="object-non-visible animated object-visible fadeInUpSmall" data-animation-effect="fadeInUpSmall" data-effect-delay="200"><i class="fa fa-check-square-o"></i> 8 Footer Options</li>
                        <li class="object-non-visible animated object-visible fadeInUpSmall" data-animation-effect="fadeInUpSmall" data-effect-delay="250"><i class="fa fa-check-square-o"></i> 200+ HTML files</li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <strong>Some bold text</strong>, unde voluptatum quidem explicabo et eius aut nisi dolore ut.</p>
                    <a href="page-about.html" class="btn btn-default btn-hvr hvr-shutter-out-horizontal btn-lg"><i class="fa fa-users pr-10"></i>Learn More</a>
                </div>
                <div class="col-md-6">
                    <br>
                    <div role="tabpanel">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs style-1" role="tablist">
                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-heart pr-10"></i>We Love</a></li>
                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">What</a></li>
                            <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">We Do</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                <div class="overlay-container overlay-visible">
                                    <img src="{{ asset('images/section-image-3.jpg') }}" alt="">
                                    <a href="#" class="overlay-link"><i class="fa fa-link"></i></a>
                                    <div class="overlay-bottom hidden-xs">
                                        <div class="text">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt nobis sunt, quae alias impedit ea molestias recusandae.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="profile">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="//player.vimeo.com/video/29198414?byline=0&amp;portrait=0"></iframe>
                                    <p><a href="http://vimeo.com/29198414">Introducing Vimeo Music Store</a> from <a href="http://vimeo.com/staff">Vimeo Staff</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="messages">
                                <h3>Lorem ipsum dolor sit amet</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium voluptas excepturi hic eveniet deleniti, voluptate fugit quod sapiente ut nulla voluptates neque a rerum! Sed dolores enim veniam, dolor minus.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui quos quidem amet sapiente praesentium unde, vel corrupti, vero dicta velit fuga ut at accusantium expedita inventore fugit perferendis non reprehenderit.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente tempore ipsam tenetur molestias eligendi provident! Itaque sapiente neque esse expedita voluptatibus qui officia, fuga a tempora! Alias voluptate pariatur quo.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section default-bg clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="call-to-action text-center">
                        <div class="row">
                            <div class="col-sm-8">
                                <h1 class="title">Kontaktirajte nas</h1>
                                <p>Ukoliko imate bilo kakve nedoumice vezane za naše usluge, kontaktirajte nas. Rado ćemo odgovoriti na sva Vaša pitanja.</p>
                            </div>
                            <div class="col-sm-4">
                                <br>
                                <p><a href="#" class="btn btn-lg btn-gray-transparent btn-animated">Learn More<i class="fa fa-arrow-right pl-20"></i></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pv-30 light-gray-bg padding-bottom-clear">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h2 class="object-non-visible text-center" data-animation-effect="zoomIn" data-effect-delay="100">Naši <strong>Radovi</strong></h2>
                    <div class="separator"></div>
                    <p class="large text-center object-non-visible" data-animation-effect="zoomIn" data-effect-delay="200">Atque ducimus velit, earum quidem, iusto dolorem. Ex ipsam totam quas blanditiis, pariatur maxime ipsa iste, doloremque neque doloribus, error. Corrupti, tenetur.</p>
                    <br>
                </div>
            </div>
        </div>
        <div class="space-bottom">
            <div class="owl-carousel carousel">
                @foreach ($photos as $photo)
                    <div class="image-box shadow">
                        <img src="{{ asset('/storage/' . $photo->medium) }}" alt="{{ $photo->title }}">
                    </div>
                @endforeach
            </div>
            <div class="owl-carousel content-slider">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="testimonial text-center">
                                <div class="testimonial-image">
                                    <img src="{{ asset('images/testimonial-1.jpg') }}" alt="Jane Doe" title="Jane Doe" class="img-circle">
                                </div>
                                <h3>Just Perfect!</h3>
                                <div class="separator"></div>
                                <div class="testimonial-body">
                                    <blockquote>
                                        <p>Sed ut perspiciatis unde omnis iste natu error sit voluptatem accusan tium dolore laud antium, totam rem dolor sit amet tristique pulvinar, turpis arcu rutrum nunc, ac laoreet turpis augue a justo.</p>
                                    </blockquote>
                                    <div class="testimonial-info-1">- Jane Doe</div>
                                    <div class="testimonial-info-2">via Facebook Reviews</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="testimonial text-center">
                                <div class="testimonial-image">
                                    <img src="{{ asset('images/testimonial-2.jpg') }}" alt="Jane Doe" title="Jane Doe" class="img-circle">
                                </div>
                                <h3>Amazing!</h3>
                                <div class="separator"></div>
                                <div class="testimonial-body">
                                    <blockquote>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et cupiditate deleniti ratione in. Expedita nemo, quisquam, fuga adipisci omnis ad mollitia libero culpa nostrum est quia eos esse vel!</p>
                                    </blockquote>
                                    <div class="testimonial-info-1">- Jane Doe</div>
                                    <div class="testimonial-info-2">By Company</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pv-40 stats padding-bottom-clear dark-translucent-bg hovered background-img-1" style="background-position: 50% 50%;">
        <div class="clearfix">
            <div class="col-md-3 col-xs-6 text-center">
                <div class="feature-box object-non-visible" data-animation-effect="fadeIn" data-effect-delay="300">
                    <span class="icon default-bg large circle"><i class="fa fa-users"></i></span>
                    <h3><strong>Klijenata</strong></h3>
                    <span class="counter" data-to="1525" data-speed="5000">0</span>
                </div>
            </div>
            <div class="col-md-3 col-xs-6 text-center">
                <div class="feature-box object-non-visible" data-animation-effect="fadeIn" data-effect-delay="300">
                    <span class="icon default-bg large circle"><i class="fa fa-microchip"></i></span>
                    <h3><strong>Remapiranja</strong></h3>
                    <span class="counter" data-to="1225" data-speed="5000">0</span>
                </div>
            </div>
            <div class="col-md-3 col-xs-6 text-center">
                <div class="feature-box object-non-visible" data-animation-effect="fadeIn" data-effect-delay="300">
                    <span class="icon default-bg large circle"><i class="fa fa-wrench"></i></span>
                    <h3><strong>Opreme</strong></h3>
                    <span class="counter" data-to="12235" data-speed="5000">0</span>
                </div>
            </div>
            <div class="col-md-3 col-xs-6 text-center">
                <div class="feature-box object-non-visible" data-animation-effect="fadeIn" data-effect-delay="300">
                    <span class="icon default-bg large circle"><i class="fa fa-handshake-o"></i></span>
                    <h3><strong>Partnera</strong></h3>
                    <span class="counter" data-to="15002" data-speed="5000">0</span>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection