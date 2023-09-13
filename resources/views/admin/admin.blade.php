
<!-- /*
* Template Name: Learner
* Template Author: Untree.co
* Tempalte URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />

    <link
        href="https://fonts.googleapis.com/css2?family=Display+Playfair:wght@400;700&family=Inter:wght@400;700&display=swap"
        rel="stylesheet">


    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <link rel="stylesheet" href="{{ asset('storage/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/css/style.css') }}">
    <style>
    </style>


    <title>Khar-Bi</title>
</head>

<body>

    <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close">
                <span class="icofont-close js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>



    <nav class="site-nav mb-5">
        <div class="pb-2 top-bar mb-3">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-6 col-lg-9">
                        <a href="#" class="small mr-3"><span class="icon-question-circle-o mr-2"></span> <span
                                class="d-none d-lg-inline-block">Vous avez des questions?</span></a>
                        <a href="#" class="small mr-3"><span class="icon-phone mr-2"></span> <span
                                class="d-none d-lg-inline-block">+221 77 702 60 66</span></a>
                        <a href="#" class="small mr-3"><span class="icon-envelope mr-2"></span> <span
                                class="d-none d-lg-inline-block">info@Khar-bi.com</span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-nav js-sticky-header">
            <div class="container position-relative">
                <div class="site-navigation text-center">
                    <a href="/" class="logo menu-absolute m-0">Khar-Bi<span class="text-primary">.</span></a>

                    <ul class="js-clone-nav d-none d-lg-inline-block site-menu">
                        <li class="active"><a href="/">Home</a></li>

                        <li><a href="{{ route('admin') }}">Les Comptes</a></li>
                        <li><a href="{{ route('listAdmin') }}">Les Administrateurs</a></li>
                        <li><a href="{{ route('listEleveur') }}">Les Eleveurs</a></li>
                        <li><a href="{{ route('listClient') }}">Les Clients</a></li>
                    </ul>
                    &nbsp;&nbsp;
                    <a href="#" class="btn-book btn btn-secondary btn-sm">{{ Auth::user()->prenom}}</a>&nbsp;

                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();" class="btn-book btn btn-secondary btn-sm ">Deconnexion</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>


                    <a href="#"
                        class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light"
                        data-toggle="collapse" data-target="#main-navbar">
                        <span></span>
                    </a>
                </ul>

                </div>
            </div>
        </div>
    </nav>


    <div class="untree_co-hero overlay" style="background-image: url('{{ asset('storage/images/Mouton.jpeg') }}">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12">
                    <div class="row justify-content-center ">
                        <div class="col-lg-6 text-center ">
                            <h1 class="mb-4 heading text-white" data-aos="fade-up" data-aos-delay="100">Liste des Utilisateurs</h1>

                        </div>


                    </div>

                </div>

            </div> <!-- /.row -->
        </div> <!-- /.container -->

    </div> <!-- /.untree_co-hero -->




    <div class="container">
        <div class="row">
            @foreach ($users as $user)
                <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="media-h d-flex h-100">
                        {{-- <figure>
                            <img src="{{ asset('storage/' . $mouton->photo) }}" alt="Image">
                        </figure> --}}
                        <div class="media-h-body">
                            <h2 class="mb-3"><a
                                    href="{{ route('users.show', $user->id) }}">{{ $user->nom }} {{ $user->prenom }}</a></h2>
                            <p>Adresse: {{ $user->adresse }}</p>
                            <p>Profil: {{ $user->role }}</p>
                            <p>Emails: {{ $user->email }} </p>

                            <a href="{{ route('users.show', $user->id) }}" class="btn btn-primary btn-sm">Détails</a>
                            <a href="{{ route('users.destroy', $user->id) }}" class="btn btn-danger btn-sm"
                                onclick="event.preventDefault(); if(confirm('Êtes-vous sûr?')) document.getElementById('delete-form-{{ $user->id }}').submit();">Supprimer</a>

                            <form id="delete-form-{{ $user->id }}"
                                action="{{ route('users.destroy', $user->id) }}" method="POST"
                                style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>&nbsp;
                            <br>
                            @if ($user->status)
                                <form method="POST" action="{{ route('users.block', $user->id) }}">
                                    @csrf
                                    <button type="submit" class="btn btn-secondary btn-sm">Bloquer</button>
                                </form>
                            @else
                                <form method="POST" action="{{ route('users.unblock', $user->id) }}">
                                    @csrf
                                    <button type="submit" class="btn btn-secondary btn-sm">Debloquer</button>
                                </form>
                            @endif
                        </div>
                    </div>

                </div>
            @endforeach
            @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
            @endif

            <div class="col-12 text-center">
                {{ $users->links() }} <!-- Affiche la pagination -->
            </div>

        </div>

        <div class="row mt-5">
            <div class="col-12 text-center">
                {{ $users->links() }} {{-- Affiche la pagination --}}
            </div>
        </div>
    </div>

    <!-- /.untree_co-section -->

    <div class="site-footer">


        <div class="container">

            <div class="row">
                <div class="col-lg-3 mr-auto">
                    <div class="widget">
                        <h3>A Propos de Nous<span class="text-primary">.</span> </h3>
                        <p>Chez Khar-bi.com, nous puisons dans notre riche héritage et notre expertise avérée pour
                            offrir des services d'assistance exceptionnels, guidant nos clients à travers les défis et
                            au-delà des frontières conventionnelles.</p>
                    </div> <!-- /.widget -->
                    <div class="widget">
                        <h3>Suivez nous sur les Réseaux sociaux</h3>
                        <ul class="list-unstyled social">
                            <li><a href="#"><span class="icon-instagram"></span></a></li>
                            <li><a href="#"><span class="icon-twitter"></span></a></li>
                            <li><a href="#"><span class="icon-facebook"></span></a></li>
                            <li><a href="#"><span class="icon-linkedin"></span></a></li>
                            <li><a href="#"><span class="icon-pinterest"></span></a></li>
                            <li><a href="#"><span class="icon-dribbble"></span></a></li>
                        </ul>
                    </div> <!-- /.widget -->
                </div> <!-- /.col-lg-3 -->

                <div class="col-lg-2 ml-auto">
                    <div class="widget">
                        <h3>Elevage</h3>
                        <ul class="list-unstyled float-left links">
                            <li><a href="#">Moutons</a></li>
                            <li><a href="#">Chèvres</a></li>
                            <li><a href="#">Poules</a></li>
                            <li><a href="#">Lapins</a></li>
                            <li><a href="#">Pigeons</a></li>
                        </ul>
                    </div> <!-- /.widget -->
                </div> <!-- /.col-lg-3 -->

                <div class="col-lg-3">
                    <div class="widget">
                        <h3>Gallery</h3>
                        <ul class="instafeed instagram-gallery list-unstyled">
                            <li><a class="instagram-item" href="{{ asset('storage/images/mouton1.webp') }}"
                                    data-fancybox="gal"><img src="{{ asset('storage/images/mouton1.webp') }}" alt="" width="72"
                                        height="72"></a>
                            </li>
                            <li><a class="instagram-item" href="{{ asset('storage/images/mouton2.webp') }}"
                                    data-fancybox="gal"><img src="{{ asset('storage/images/mouton2.webp') }}" alt="" width="72"
                                        height="72"></a>
                            </li>
                            <li><a class="instagram-item" href="{{ asset('storage/images/mouton3.webp') }}"
                                    data-fancybox="gal"><img src="{{ asset('storage/images/mouton3.webp') }}" alt="" width="72"
                                        height="72"></a>
                            </li>
                            <li><a class="instagram-item" href="{{ asset('storage/images/mouton4.webp') }}"
                                    data-fancybox="gal"><img src="{{ asset('storage/images/mouton4.webp') }}" alt="" width="72"
                                        height="72"></a>
                            </li>
                            <li><a class="instagram-item" href="{{ asset('storage/images/mouton5.webp') }}"
                                    data-fancybox="gal"><img src="{{ asset('storage/images/mouton5.webp') }}" alt="" width="72"
                                        height="72"></a>
                            </li>
                            <li><a class="instagram-item" href="{{ asset('storage/images/mouton6.webp') }}"
                                    data-fancybox="gal"><img src="{{ asset('storage/images/mouton6.webp') }}" alt="" width="72"
                                        height="72"></a>
                            </li>
                        </ul>
                    </div> <!-- /.widget -->
                </div> <!-- /.col-lg-3 -->


                <div class="col-lg-3">
                    <div class="widget">
                        <h3>Contact</h3>
                        <address>Yeumbeul-Nord, Cité Comico 4 extension</address>
                        <ul class="list-unstyled links mb-4">
                            <li><a href="tel://11234567890">+221 77 702 60 66</a></li>
                            <li><a href="tel://11234567890">+221 77 702 60 66</a></li>
                            <li><a href="mailto:info@mydomain.com">info@Khar-bi.com</a></li>
                        </ul>
                    </div> <!-- /.widget -->
                </div> <!-- /.col-lg-3 -->

            </div> <!-- /.row -->

            <div class="row mt-5">
                <div class="col-12 text-center">
                    <p class="copyright">Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script>. Tous les Droits sont Reservés. &mdash; Designed with love by <a
                            href="">Serigne Cheikh NDAO</a> Distributed By <a
                            href="https://themewagon.com">ThemeWagon</a>
                        <!-- License information: https://untree.co/license/ -->
                </div>
            </div>
        </div> <!-- /.container -->
    </div> <!-- /.site-footer -->

    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <script src="{{ asset('storage/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('storage/js/popper.min.js') }}"></script>
    <script src="{{ asset('storage/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('storage/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('storage/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('storage/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('storage/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('storage/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('storage/js/aos.js') }}"></script>
    <script src="{{ asset('storage/js/custom.js') }}"></script>


</body>

</html>
