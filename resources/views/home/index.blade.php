@extends('layouts.app')

@section('title', config('app.name', 'RPCT') . ' - Sabac, Srbija')
@section('description', 'Chip Tuning, profesionalno uklanjanje DPF filtera i gašenje EGR ventila, rešenje problema sa toplim startom, brisanje grešaka, Sabac, Srbija i okolina.')
@section('facebook_type', 'website')
@section('twitter_card', 'summary_large_image')
@section('twitter_image', asset('images/logo.jpg'))

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
                    <p>Nudimo jedinstveno rešenje za svako vozilo. Za razliku od ostalih Tuning kuca ne učitavamo gotove mape već svako vozilo mapiramo posebno. </p>
                    <ul class="list-icons">
                        <li class="object-non-visible animated object-visible fadeInUpSmall" data-animation-effect="fadeInUpSmall" data-effect-delay="100"><i class="fa fa-check-square-o"></i> Oprema poslednje generacije</li>
                        <li class="object-non-visible animated object-visible fadeInUpSmall" data-animation-effect="fadeInUpSmall" data-effect-delay="150"><i class="fa fa-check-square-o"></i> Profesionalnost</li>
                        <li class="object-non-visible animated object-visible fadeInUpSmall" data-animation-effect="fadeInUpSmall" data-effect-delay="200"><i class="fa fa-check-square-o"></i> Efikasnost</li>
                        <li class="object-non-visible animated object-visible fadeInUpSmall" data-animation-effect="fadeInUpSmall" data-effect-delay="250"><i class="fa fa-check-square-o"></i> Iskustvo</li>
                    </ul>
                    <p>Chip Tuning za kompletan teretni i putnički program. <strong>Značajno smanjenje potrošnje kod kamiona</strong>, koje ide od 1 do 3l na 100 km u zavisnosti od vozila.</p>
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
                                <h3>Šta je Chip Tuning?</h3>
                                <p>Chip tuning je nova definicija za ECU Remapping. Chip tuning je ranije zahtevao skidanje EEprom ili Flash memorije sa ECU-a, isčitavanje softvera na nekom programatoru, editovanje i vraćanje nazad u motorni računar (ECU).</p>
                                <p>Softver unutar čipa je ono što se obično nazivamo “mapom”, a menjanje sadržaja te “mape” nazivamo remap. Ovakav vid chip tuning, isčitavanje programatorom, je sve manje zastupljen jer motorni računari od 2000.godine dobijaju nove protokole za komuniciranje preko ODB dijagnostičkog priključka, koji je danas već duži niz godina standard u autoindustriji. </p>
                                <p>Ti protokoli (K-linija, L-linija, CAN-L, CAH-h…) omogućili su isčitavanje sadržaja ECU-a (“mape”) preko OBD porta što je u mnogome uticalo na popularizaciju Chip tuninga.</p>
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
                    <p class="large text-center object-non-visible" data-animation-effect="zoomIn" data-effect-delay="200">Koristeći savremeni software I originalne interfejse naši radovi govore sami za sebe. Trudimo se da sve detaljno zabeležimo i opišemo kako bi budućim klijentima pokazali zašto smo drugačiji od drugih.</p>
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
                                <h3>Racing Performance</h3>
                                <div class="separator"></div>
                                <div class="testimonial-body">
                                    <blockquote>
                                        <p>“Nikad nisam išao na pravi izlet, nikad nisam išao na odmor. Najbolji odmor je za mene u mojoj garaži kad su svi drugi na godišnjem.”</p>
                                    </blockquote>
                                    <div class="testimonial-info-1">Enzo Ferrari</div>
                                    <div class="testimonial-info-2">Osnivač Italijanske fabrike sportskih automobila.</div>
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
                                <h3>Chip Tuning</h3>
                                <div class="separator"></div>
                                <div class="testimonial-body">
                                    <blockquote>
                                        <p>"Osvajao sam titule jer sam davao gas tamo gde su drugi kocili."</p>
                                    </blockquote>
                                    <div class="testimonial-info-1">Michael Schumacher</div>
                                    <div class="testimonial-info-2">Vozač F1</div>
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