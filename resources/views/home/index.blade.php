@extends('layouts.app')

@section('title', config('app.name', 'RPCT') . ' - Sabac, Srbija')
@section('description', 'Chip Tuning, profesionalno uklanjanje DPF filtera i gašenje EGR ventila, rešenje problema sa toplim startom, brisanje grešaka, Sabac, Srbija i okolina.')
@section('facebook_type', 'website')
@section('twitter_card', 'summary_large_image')
@section('twitter_image', asset('images/logo.jpg'))

@section('styles')
<link rel="stylesheet" type="text/css" href="/css/rev-slider.css">
@endsection

@section('scripts')
<script src="/js/rev-slider.js"></script>
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
                        @slot('icon')
                            <i class="fa fa-arrows"></i>
                        @endslot
                        @slot('title', 'Automobili')
                        @slot('description', 'Chip Tuning za vozila koja poseduju turbo dizel ili turbo benzinski motor. Povećanje snage uz smanjenje potrošnje.')
                        @slot('link', route('services.cars'))
                    @endcomponent
                    @component('components.groups')
                        @slot('icon')
                            <i class="fa fa-arrows"></i>
                        @endslot
                        @slot('title', 'Kamioni')
                        @slot('description', 'Chip Tuningom kamiona dobija se značajno povećanje snage dok se potrošnja smanjuje do 3l, čime se postiže velika ušteda.')
                        @slot('link', route('services.trucks'))
                    @endcomponent
                    @component('components.groups')
                        @slot('icon')
                            <i class="fa fa-arrows"></i>
                        @endslot
                        @slot('title', 'Poljoprivredne mašine')
                        @slot('description', 'Povećanje snage i smanjenje potrošnje moguće je postići i na poljoprivrednim mašinama.')
                        @slot('link', route('services.machines'))
                    @endcomponent
                </div>
                <div class="col-md-6">
                    <img src="/images/tools-1.png" alt="Usluge">
                </div>
            </div>
            <div class="row">
                <div class="pv-20">
                @component('components.service')
                    @slot('icon')
                        <i class="fa fa-diamond"></i>
                    @endslot
                    @slot('title', 'DPF OFF')
                    @slot('description', 'Problem sa DPF filterom rešavamo trajno softverskim i fizičkim uklanjanjem.')
                    @slot('link', route('services.dpf'))
                @endcomponent
                @component('components.service')
                    @slot('icon')
                        <i class="fa fa-diamond"></i>
                    @endslot
                    @slot('title', 'EGR OFF')
                    @slot('description', 'Problem sa EGR ventilom rešavamo trajno softverskim gašenjem i fizičkim zatvaranjem.')
                    @slot('link', route('services.egr'))
                @endcomponent
                @component('components.service')
                    @slot('icon')
                        <i class="fa fa-diamond"></i>
                    @endslot
                    @slot('title', 'DTC OFF')
                    @slot('description', 'Ukoliko se javi potreba vršimo selektivno brisanje grešaka iz motornog računara vozila.')
                    @slot('link', route('services.dtc'))
                @endcomponent
                @component('components.service')
                    @slot('icon')
                        <i class="fa fa-diamond"></i>
                    @endslot
                    @slot('title', 'AD Blue OFF')
                    @slot('description', 'Softversko gašenje AdBlue sistema kojim je opremljena većina vozila novije proizvodnje.')
                    @slot('link', route('services.adblue'))
                @endcomponent
                @component('components.service')
                    @slot('icon')
                        <i class="fa fa-diamond"></i>
                    @endslot
                    @slot('title', 'Swirl Flaps OFF')
                    @slot('description', 'Klapne usisne grane – Swirl/Flaps su veoma osetljive i često prouzrokuju probleme u radu motora.')
                    @slot('link', route('services.swirlflaps'))
                @endcomponent
                @component('components.service')
                    @slot('icon')
                        <i class="fa fa-diamond"></i>
                    @endslot
                    @slot('title', 'Speed Limit OFF')
                    @slot('description', 'Neki proizvođači postavljaju ograničenje brzine na svoja vozila, taj limit je moguće ukinuti.')
                    @slot('link', route('services.speedlimit'))
                @endcomponent
                @component('components.service')
                    @slot('icon')
                        <i class="fa fa-diamond"></i>
                    @endslot
                    @slot('title', 'Hot Start Fix')
                    @slot('description', 'Nakon postizanja radne temperature, motor ne može da upali ili dugo vergla da bi upalio.')
                    @slot('link', route('services.hotstart'))
                @endcomponent
                @component('components.service')
                    @slot('icon')
                        <i class="fa fa-diamond"></i>
                    @endslot
                    @slot('title', 'GPS Praćenje')
                    @slot('description', 'Satelitsko praćenje vozila u zemilji i inostranstvu, praćenje parametara motora, potrošnje, pređenog puta.')
                    @slot('link', route('services.gps'))
                @endcomponent
                @component('components.service')
                    @slot('icon')
                        <i class="fa fa-diamond"></i>
                    @endslot
                    @slot('title', 'Dijagnostika')
                    @slot('description', 'Posedujemo savremene uređaje za dijagnostiku koji nam omogućavaju rad na vozilima poslednje generacije.')
                    @slot('link', route('services.diagnostics'))
                @endcomponent
                </div>
            </div>
        </div>
    </section>
    @include('partials.prices')
    <section class="pv-30">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <h2 class="text-center">Zašto <strong>baš</strong> mi</h2>
                    <div class="separator"></div>
                    <p class="large text-center">Bavimo se prvenstveno povećanjem snage vozila uz smanjenje potrošnje. Ono što nas izdvaja u odnosu na ostale firme jeste oprema i software poslednje generacije koji nam omogućava brz, kvalitetan i efikasan rad.</p>
                    <br>
                </div>
                <div class="col-md-6">
                    <img class="space-bottom" src="/images/img-1.jpg" alt="Zasto bas mi">
                </div>
                <div class="col-md-6">
                    <p class="hidden-md">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At provident modi nobis dolores ratione, maiores beatae vel iste illo incidunt officia</p>
                    @component('components.feature')
                        @slot('icon')
                            <i class="fa fa-clock-o"></i>
                        @endslot
                        @slot('title', 'Brzina i efikasnost')
                        @slot('description', 'Čitanje i upis vrši se putem ODB konektora bez skidanja računara, uređajima poslednje generacije.')
                    @endcomponent
                    @component('components.feature')
                        @slot('icon')
                            <i class="fa fa-tachometer"></i>
                        @endslot
                        @slot('title', 'Detaljna provera vozila')
                        @slot('description', 'Posedujemo najmodernije uređaje za dijagnostičke za detaljnu i preciznu proveru vašeg vozila.')
                    @endcomponent
                    @component('components.feature')
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
                    <p>Jedinstveno rešenje za svako vozilo. Za razliku od većine drugih, ne učitavamo gotove mape već svako vozilo mapiramo posebno u cilju postizanja optimalnih performansi vašeg vozila.
                    <p>Chip tuningom teretnih mašina postiže se značajno smanjenje potrošnje, koje se kreće od 1 do 3L na 100 predjenih kilometara u zavisnosti od samog vozila.</p>
                    <ul class="list-icons space-bottom">
                        <li><i class="fa fa-check-square-o"></i> Profesionalna usluga</li>
                        <li><i class="fa fa-check-square-o"></i> Izrada jedinstvene mape za vaše vozilo</li>
                        <li><i class="fa fa-check-square-o"></i> Remapiranje teretnih i putničkih vozila</li>
                        <li><i class="fa fa-check-square-o"></i> Originalni interfejsi za čitanje i upis mapa</li>
                        <li><i class="fa fa-check-square-o"></i> Originalne mape vašeg vozila se trajno čuvaju</li>
                    </ul>
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
                                    <img src="/images/section-image-3.jpg" alt="">
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
    @include('partials.contact')
    <section class="pv-30 light-gray-bg padding-bottom-clear">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <h2 class="text-center">Naši <strong>Radovi</strong></h2>
                    <div class="separator"></div>
                    <p class="large text-center">Koristeći savremeni software i originalne interfejse naši radovi govore sami za sebe. Trudimo se da sve detaljno zabeležimo i opišemo kako bi budućim klijentima pokazali zašto smo drugačiji od drugih.</p>
                </div>
            </div>
        </div>
        <div class="space-bottom">
            @if ($photos->isNotEmpty())
            <div class="owl-carousel carousel">
                @foreach ($photos as $photo)
                    <div class="image-box shadow">
                        <img src="/storage/{{ $photo->medium }}" alt="{{ $photo->title }}">
                    </div>
                @endforeach
            </div>
            @endif
            @if ($testimonials->isNotEmpty())
                @component('components.testimonials', ['testimonials' => $testimonials])
                @endcomponent
            @endif
        </div>
    </section>
    <section class="pv-40 stats padding-bottom-clear dark-translucent-bg hovered background-img-1">
        <div class="clearfix">
            <div class="col-md-3 col-xs-6 text-center">
                <div class="feature-box">
                    <span class="icon default-bg large circle"><i class="fa fa-users"></i></span>
                    <h3><strong>Klijenata</strong></h3>
                    <span class="counter" data-to="1525" data-speed="5000">0</span>
                </div>
            </div>
            <div class="col-md-3 col-xs-6 text-center">
                <div class="feature-box">
                    <span class="icon default-bg large circle"><i class="fa fa-microchip"></i></span>
                    <h3><strong>Remapiranja</strong></h3>
                    <span class="counter" data-to="1225" data-speed="5000">0</span>
                </div>
            </div>
            <div class="col-md-3 col-xs-6 text-center">
                <div class="feature-box">
                    <span class="icon default-bg large circle"><i class="fa fa-wrench"></i></span>
                    <h3><strong>Opreme</strong></h3>
                    <span class="counter" data-to="12235" data-speed="5000">0</span>
                </div>
            </div>
            <div class="col-md-3 col-xs-6 text-center">
                <div class="feature-box">
                    <span class="icon default-bg large circle"><i class="fa fa-handshake-o"></i></span>
                    <h3><strong>Partnera</strong></h3>
                    <span class="counter" data-to="15002" data-speed="5000">0</span>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection