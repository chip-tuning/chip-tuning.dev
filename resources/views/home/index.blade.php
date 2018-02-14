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
    @include('sections.slider')
    <section class="pv-30 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h2 class="text-center">Naše <strong>Usluge</strong></h2>
                    <div class="separator"></div>
                    <p class="large text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam voluptas facere vero ex tempora saepe perspiciatis ducimus sequi animi.</p>
                </div>
                <div class="col-md-12">
                    <h3 class="title">Chip Tuning</h3>
                    <div class="separator-2"></div>
                </div>
                <div class="col-md-6 space-top">
                    <div class="feature-box-2 right" data-animation-effect="fadeInDownSmall" data-effect-delay="25">
                        <span class="icon without-bg"><i class="fa fa-arrows"></i></span>
                        <div class="body">
                            <h4 class="title text-default">Automobili</h4>
                            <p>Our design is with responsive in mind. Our themes are compatible with various desktop, tablet, and mobile devices. <a href="#">Saznaj više<i class="pl-5 fa fa-angle-double-right"></i></a></p>
                            <div class="separator-3"></div>
                        </div>
                    </div>
                    <div class="feature-box-2 right" data-animation-effect="fadeInDownSmall" data-effect-delay="50">
                        <span class="icon without-bg"><i class="fa fa-arrows"></i></span>
                        <div class="body">
                            <h4 class="title text-default">Kamioni</h4>
                            <p>Our design is with responsive in mind. Our themes are compatible with various desktop, tablet, and mobile devices. <a href="#">Saznaj više<i class="pl-5 fa fa-angle-double-right"></i></a></p>
                            <div class="separator-3"></div>
                        </div>
                    </div>
                    <div class="feature-box-2 right" data-animation-effect="fadeInDownSmall" data-effect-delay="75">
                        <span class="icon without-bg"><i class="fa fa-arrows"></i></span>
                        <div class="body">
                            <h4 class="title text-default">Poljoprivredne masine</h4>
                            <p>Our design is with responsive in mind. Our themes are compatible with various desktop, tablet, and mobile devices. <a href="#">Saznaj više<i class="pl-5 fa fa-angle-double-right"></i></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('images/service-image-1.png') }}" alt="Nase usluge">
                </div>
                <div class="col-md-4 ">
                    <div class="pv-20 ph-20 feature-box-2 boxed shadow" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                        <span class="icon without-bg"><i class="fa fa-diamond"></i></span>
                        <div class="body">
                            <h4 class="title">DPF OFF</h4>
                            <p>Voluptatem ad provident non repudiandae beatae cupiditate amet reiciendis lorem dolor consectetur.</p>
                            <a href="#">Saznaj više<i class="pl-5 fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="pv-20 ph-20 feature-box-2 boxed shadow" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                        <span class="icon without-bg"><i class="fa fa-diamond"></i></span>
                        <div class="body">
                            <h4 class="title">EGR OFF</h4>
                            <p>Voluptatem ad provident non repudiandae beatae cupiditate amet reiciendis lorem dolor consectetur.</p>
                            <a href="#">Saznaj više<i class="pl-5 fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="pv-20 ph-20 feature-box-2 boxed shadow" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                        <span class="icon without-bg"><i class="fa fa-diamond"></i></span>
                        <div class="body">
                            <h4 class="title">DTC OFF</h4>
                            <p>Voluptatem ad provident non repudiandae beatae cupiditate amet reiciendis lorem dolor consectetur.</p>
                            <a href="#">Saznaj više<i class="pl-5 fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="pv-20 ph-20 feature-box-2 boxed shadow" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                        <span class="icon without-bg"><i class="fa fa-diamond"></i></span>
                        <div class="body">
                            <h4 class="title">AD Blue OFF</h4>
                            <p>Voluptatem ad provident non repudiandae beatae cupiditate amet reiciendis lorem dolor consectetur.</p>
                            <a href="#">Saznaj više<i class="pl-5 fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="pv-20 ph-20 feature-box-2 boxed shadow" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                        <span class="icon without-bg"><i class="fa fa-diamond"></i></span>
                        <div class="body">
                            <h4 class="title">Swirl Flaps OFF</h4>
                            <p>Voluptatem ad provident non repudiandae beatae cupiditate amet reiciendis lorem dolor consectetur.</p>
                            <a href="#">Saznaj više<i class="pl-5 fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="pv-20 ph-20 feature-box-2 boxed shadow" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                        <span class="icon without-bg"><i class="fa fa-diamond"></i></span>
                        <div class="body">
                            <h4 class="title">Speed Limit OFF</h4>
                            <p>Voluptatem ad provident non repudiandae beatae cupiditate amet reiciendis lorem dolor consectetur.</p>
                            <a href="#">Saznaj više<i class="pl-5 fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="pv-20 ph-20 feature-box-2 boxed shadow" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                        <span class="icon without-bg"><i class="fa fa-diamond"></i></span>
                        <div class="body">
                            <h4 class="title">Topli Start OFF</h4>
                            <p>Voluptatem ad provident non repudiandae beatae cupiditate amet reiciendis lorem dolor consectetur.</p>
                            <a href="#">Saznaj više<i class="pl-5 fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="pv-20 ph-20 feature-box-2 boxed shadow" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                        <span class="icon without-bg"><i class="fa fa-diamond"></i></span>
                        <div class="body">
                            <h4 class="title">GPS Praćenje</h4>
                            <p>Voluptatem ad provident non repudiandae beatae cupiditate amet reiciendis lorem dolor consectetur.</p>
                            <a href="#">Saznaj više<i class="pl-5 fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="pv-20 ph-20 feature-box-2 boxed shadow" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                        <span class="icon without-bg"><i class="fa fa-diamond"></i></span>
                        <div class="body">
                            <h4 class="title">Dijagnostika</h4>
                            <p>Voluptatem ad provident non repudiandae beatae cupiditate amet reiciendis lorem dolor consectetur.</p>
                            <a href="#">Saznaj više<i class="pl-5 fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section dark-bg pv-40 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="call-to-action text-center">
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2">
                                <h2 class="title">Cene usluga</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus error pariatur deserunt laudantium nam, mollitia quas nihil inventore, quibusdam?</p>
                                <div class="separator"></div>
                                <form class="form-inline margin-clear">
                                    <div class="form-group has-feedback">
                                        <label class="sr-only" for="subscribe2">Email address</label>
                                        <input class="form-control" id="subscribe2" placeholder="Enter email" name="subscribe2" required="" type="email">
                                        <i class="fa fa-envelope form-control-feedback"></i>
                                    </div>
                                    <button type="submit" class="btn btn-gray-transparent btn-animated margin-clear">Submit <i class="fa fa-send"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pv-30">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h2 class="text-center">Zašto <strong>baš</strong> mi</h2>
                    <div class="separator"></div>
                    <p class="large text-center">Atque ducimus velit, earum quidem, iusto dolorem. Ex ipsam totam quas blanditiis, pariatur maxime ipsa iste, doloremque neque doloribus, error. Corrupti, tenetur.</p>
                    <br>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('images/section-image-1.png') }}" alt="Zasto bas mi">
                </div>
                <div class="col-md-6">
                    <p class="space-top">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At provident modi nobis dolores ratione, maiores beatae vel iste illo incidunt officia sed id cupiditate quasi excepturi</p>
                    <div class="media object-non-visible animated object-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                        <div class="media-left pr-20">
                            <a href="#">
                                <span class="icon circle small default-bg"><i class="fa fa-eye"></i></span>
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Extremely Flexible</h4>
                            Cras sit amet nibh libero, in gravida nulla. Sollicitudin.
                        </div>
                    </div>
                    <div class="media object-non-visible animated object-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                        <div class="media-left pr-20">
                            <a href="#">
                                <span class="icon circle small default-bg"><i class="fa fa-calendar"></i></span>
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Packed Full Of Features</h4>
                            Cras sit amet nibh libero. Nulla vel metus scelerisque.
                        </div>
                    </div>
                    <div class="media object-non-visible animated object-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                        <div class="media-left pr-20">
                            <a href="#">
                                <span class="icon circle small default-bg"><i class="fa fa-car"></i></span>
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">24/7 Support</h4>
                            Cras sit amet nibh libero. Nulla vel metus scelerisque.
                        </div>
                    </div>
                    <p><a href="#" class="btn btn-default-transparent btn-animated">Learn More <i class="fa fa-arrow-right pl-10"></i></a></p>
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
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem quasi explicabo consequatur consectetur, a atque voluptate officiis eligendi nostrum.</p>
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
                        <img src="{{ asset('/storage' . $photo->medium) }}" alt="{{ $photo->title }}">
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