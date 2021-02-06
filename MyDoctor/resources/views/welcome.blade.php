@extends('layouts.app')

@section('content')
    <!-- ======= Sezione di benvenuto ======= -->
    <section id="benvenuto" class="d-flex align-items-center">
        <div class="container">
            <h1>Benvenuti in MyDoctor</h1>
            <h2> Al giorno d’oggi per poter richiedere un appuntamento al medico è necessario telefonare e prenotare o
                andare nello studio e attendere la coda.
                Con MyDoctor non sarà più necessario.
            </h2>
            <a href="#accesso" class="btn-get-started scrollto">INIZIAMO</a>
        </div>
    </section>
    <!-- fine  -->

    <main id="main">
        <!-- ======= Perchè noi ======= -->
        <section id="why-us" class="why-us">
            <div class="container">

                <div class="row">
                    <div class="col-lg-4 d-flex align-items-stretch">
                        <div class="content">
                            <h3>Perchè scegliere MyDoctor?</h3>
                            <p>
                                Per entrare in contatto con il proprio medico direttamente dal divano di casa senza dover
                                attendere o chiamare
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-8 d-flex align-items-stretch">
                        <div class="icon-boxes d-flex flex-column justify-content-center">
                            <div class="row">
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="bx bx-receipt"></i>
                                        <h4>Richiedi una ricetta e fattela inviare comodamente</h4>
                                        <p>Con MyDoctor le ricette potranno essere visualizzte nella propria area personale
                                            per poi utilizzarle comodamente a proprio piacimento.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="bx bx-cube-alt"></i>
                                        <h4>Prenota una visita per evitare lunghe code</h4>
                                        <p>Grazie alla funzione di prenotazione non si dovrà più rimanere ad aspettare anche
                                            per ore in coda</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="bx bx-images"></i>
                                        <h4>Trova il medico più vicino a te se ancora non ne hai uno</h4>
                                        <p>Sei nuovo e ancora non hai un medico di base? Non c'è problema, il sistema
                                            provvederà ad assegnartene uno</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- fine .content-->
                    </div>
                </div>

            </div>
        </section><!-- Fine Sezione "perchè noi" -->

        <!-- ======= Sezione Accesso ======= -->
        <section id="accesso" class="accesso">
            <div class="container-fluid">

                <div class="row">
                    <div
                        class="col-xl-5 col-lg-6 img-box d-flex justify-content-center align-items-stretch position-relative">
                    </div>
                    <div
                        class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
                        <h3>Pensato sia per pazienti che medici</h3>
                        <p>MyDoctor rivoluzionerà il modo di interagire con il proprio medico </p>

                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-fingerprint"></i></div>
                            <h4 class="title"><a href="{{ route('register') }}">REGISTRAZIONE PAZIENTE</a></h4>
                            <p class="description">Registrati a MyDoctor per inziare subito a usufruire delle sue
                                fuznionalità</p>
                        </div>

                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-gift"></i></div>
                            <h4 class="title"><a href="{{ route('login') }}">LOGIN PAZIENTE</a></h4>
                            <p class="description">Sei già un all'interno della nostra community, allora accedi per
                                usufruire dei servizi di MyDoctor</p>
                        </div>

                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-atom"></i></div>
                            <h4 class="title"><a href="{{ route('doctor_register') }}">REGISTRAZIONE MEDICO</a></h4>
                            <p class="description">Sei un medico e vuoi entrare a far parte del team di MyDoctor? Allora non
                                perdere tempo e registrati subito.</p>
                        </div>

                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-atom"></i></div>
                            <h4 class="title"><a href="{{ route('doctor_login') }}">LOGIN MEDICO</a></h4>
                            <p class="description">Sei già uno dei nostri medici? Bene, non perdere tempo e accedi per
                                entrare in contatto con i tuoi pazienti.</p>
                        </div>

                    </div>
                </div>

            </div>
        </section><!-- Fine sezione Accesso -->

        <!-- ======= Sezione counter ======= -->
        <section id="counts" class="counts">
            <div class="container">

                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="icofont-dottori-alt"></i>
                            <span class="count">20</span>
                            <p>Medici</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                        <div class="count-box">
                            <i class="icofont-patient-bed"></i>
                            <span class="count">12</span>
                            <p>Edifici</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="icofont-laboratory"></i>
                            <span class="count">800</span>
                            <p>BOH</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="icofont-award"></i>
                            <span class="count">150</span>
                            <p>Pazienti</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- Fine sezione counter -->

        <!-- ======= Sezione Servizi ======= -->
        <section id="servizi" class="servizi">
            <div class="container">

                <div class="section-title">
                    <h2>Servizi</h2>
                    <p>Che tu sia medico o paziente MyDoctor ti fornirà tutto ciò di cui hai bisogno</p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="icon-box">
                            <div class="icon"><i class="icofont-heart-beat"></i></div>
                            <h4><a href="{{ route('login') }}">Vedi le tue ricette</a></h4>
                            <p>Una volta effettuato il login ti sarà possibile visualizzare tutte le ricette in tuo possesso
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                        <div class="icon-box">
                            <div class="icon"><i class="icofont-drug"></i></div>
                            <h4><a href="">Contatta il tuo medico</a></h4>
                            <p>Grazie alla comoda chat dedicata potrai contattare il tuo medico direttamente da casa</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                        <div class="icon-box">
                            <div class="icon"><i class="icofont-dna-alt-2"></i></div>
                            <h4><a href="">Prendi un appuntamento</a></h4>
                            <p>Prenotare una visita non è mai stato così facile, basta scegliere il giorno e l'ora</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                        <div class="icon-box">
                            <div class="icon"><i class="icofont-heartbeat"></i></div>
                            <h4><a href="">Medici Con Te</a></h4>
                            <p>Il medico quando visualizzerà le richieste potrà comodamente rispondere</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                        <div class="icon-box">
                            <div class="icon"><i class="icofont-disabled"></i></div>
                            <h4><a href="">Mai stato così semplice</a></h4>
                            <p>Interfaccia intuitiva per tutte le esigenze</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                        <div class="icon-box">
                            <div class="icon"><i class="icofont-autism"></i></div>
                            <h4><a href="">Una comoda agenda per appuntamenti</a></h4>
                            <p>Il medico potrà visualizzare i propri appuntamenti comodamente dalla sezione dedicata</p>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- Fine sezione Servizi -->

        <!-- ======= Sezione Dottori ======= -->
        <section id="dottori" class="dottori">
            <div class="container">

                <div class="section-title">
                    <h2>Dottori</h2>
                    <p>Un Team altamente specializzato in continua espansione</p>
                </div>

                <div class="row">

                    <div class="col-lg-6">
                        <div class="membro d-flex align-items-start">
                            <div class="pic"><img src="images/dottori/dottori-1.jpg" class="img-fluid" alt=""></div>
                            <div class="membro-info">
                                <h4>Walter White</h4>
                                <span>Chief Medical Officer</span>
                                <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4 mt-lg-0">
                        <div class="membro d-flex align-items-start">
                            <div class="pic"><img src="images/dottori/dottori-2.jpg" class="img-fluid" alt=""></div>
                            <div class="membro-info">
                                <h4>Sarah Jhonson</h4>
                                <span>Anesthesiologist</span>
                                <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4">
                        <div class="membro d-flex align-items-start">
                            <div class="pic"><img src="images/dottori/dottori-3.jpg" class="img-fluid" alt=""></div>
                            <div class="membro-info">
                                <h4>William Anderson</h4>
                                <span>Cardiology</span>
                                <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4">
                        <div class="membro d-flex align-items-start">
                            <div class="pic"><img src="images/dottori/dottori-4.jpg" class="img-fluid" alt=""></div>
                            <div class="membro-info">
                                <h4>Amanda Jepson</h4>
                                <span>Neurosurgeon</span>
                                <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Fine sezione Dottori -->

        <!-- ======= Creatori ======= -->
        <section id="creatori" class="creatori">
            <div class="container">

                <div class="owl-carousel creatori-carousel">

                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                            <img src="images/creatori/creatori-1.jpg" class="testimonial-img" alt="">
                            <h3>Rosaria Ciociola</h3>
                            <h4>Coder</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus.
                                Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div>

                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                            <img src="images/creatori/creatori-2.jpg" class="testimonial-img" alt="">
                            <h3>Giuseppe Giacalone</h3>
                            <h4>Coder</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum
                                eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim
                                culpa.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div>

                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                            <img src="images/creatori/creatori-3.jpg" class="testimonial-img" alt="">
                            <h3>Giulio Milani</h3>
                            <h4>Coder</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis
                                minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- Fine sezione Creatori -->

        <!-- ======= Galleria ======= -->
        <section id="galleria" class="galleria">
            <div class="container">

                <div class="section-title">
                    <h2>Galleria</h2>
                    <p>La nostra missione è farvi restare in contatto con il vostro medico nel modo più sicuro possibile.</p>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row no-gutters">

                    <div class="col-lg-3 col-md-4">
                        <div class="galleria-oggetto">
                            <a href="images/galleria/galleria-1.jpg" class="venobox" data-gall="galleria-oggetto">
                                <img src="images/galleria/galleria-1.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="galleria-oggetto">
                            <a href="images/galleria/galleria-2.jpg" class="venobox" data-gall="galleria-oggetto">
                                <img src="images/galleria/galleria-2.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="galleria-oggetto">
                            <a href="images/galleria/galleria-3.jpg" class="venobox" data-gall="galleria-oggetto">
                                <img src="images/galleria/galleria-3.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="galleria-oggetto">
                            <a href="images/galleria/galleria-4.jpg" class="venobox" data-gall="galleria-oggetto">
                                <img src="images/galleria/galleria-4.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="galleria-oggetto">
                            <a href="images/galleria/galleria-5.jpg" class="venobox" data-gall="galleria-oggetto">
                                <img src="images/galleria/galleria-5.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="galleria-oggetto">
                            <a href="images/galleria/galleria-6.jpg" class="venobox" data-gall="galleria-oggetto">
                                <img src="images/galleria/galleria-6.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="galleria-oggetto">
                            <a href="images/galleria/galleria-7.jpg" class="venobox" data-gall="galleria-oggetto">
                                <img src="images/galleria/galleria-7.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="galleria-oggetto">
                            <a href="images/galleria/galleria-8.jpg" class="venobox" data-gall="galleria-oggetto">
                                <img src="images/galleria/galleria-8.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- Fine Galleria immagini -->
    </main><!-- End #main -->
@endsection

<!--
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <-- Fonts --
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <-- Styles --
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            .full-height {
                height: 100vh;
            }
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .position-ref {
                position: relative;
            }
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .content {
                text-align: center;
            }
            .title {
                font-size: 84px;
            }
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                            <a href="{{ url('/home') }}">Home</a>
                    @else
                            <a href="{{ route('login') }}">Login</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Register</a>
                            @endif
                    @endauth
                </div>
            @endif
            <div class="content">
                <div class="title m-b-md">
                    Multiple Authentication in Laravel 6/7
                </div>
                <div class="links">
                    <a href="{{ route('admin_register') }}">Admin Register</a> questo puo andare anche tolto
                    <a href="{{ route('admin_login') }}">Admin Login</a>
                    <a href="{{ route('doctor_register') }}">Doctor Register</a>
                    <a href="{{ route('doctor_login') }}">Doctor Login</a>
                    <a href="{{ route('register') }}">User Register</a>
                    <a href="{{ route('login') }}">User Login</a>
                </div>
            </div>
        </div>
    </body>
</html> -->
