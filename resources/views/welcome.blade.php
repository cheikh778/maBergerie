
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

  <link href="https://fonts.googleapis.com/css2?family=Display+Playfair:wght@400;700&family=Inter:wght@400;700&display=swap" rel="stylesheet">


  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

  <link rel="stylesheet" href="{{asset('storage/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('storage/css/animate.min.css')}}">
  <link rel="stylesheet" href="{{asset('storage/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('storage/css/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{asset('storage/css/jquery.fancybox.min.css')}}">
  <link rel="stylesheet" href="{{asset('storage/fonts/icomoon/style.css')}}">
  <link rel="stylesheet" href="{{asset('storage/fonts/flaticon/font/flaticon.css')}}">
  <link rel="stylesheet" href="{{asset('storage/css/aos.css')}}">
  <link rel="stylesheet" href="{{asset('storage/css/style.css')}}">

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
                <a href="#" class="small mr-3"><span class="icon-question-circle-o mr-2"></span> <span class="d-none d-lg-inline-block">Vous avez des questions?</span></a>
                <a href="#" class="small mr-3"><span class="icon-phone mr-2"></span> <span class="d-none d-lg-inline-block">+221 77 702 60 66</span></a>
                <a href="#" class="small mr-3"><span class="icon-envelope mr-2"></span> <span class="d-none d-lg-inline-block">info@Khar-bi.com</span></a>
            </div>

          <div class="col-6 col-lg-3 text-right">
            <a href="{{ route('login') }}" class="small mr-3">
              <span class="icon-lock"></span>
              Log In
            </a>
            <a href="{{ route('register') }}" class="small">
              <span class="icon-person"></span>
              Register
            </a>
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
            <li><a href="{{route('moutons.index')}}">Les Moutons</a></li>
            <li><a href="{{route('contact')}}">Contacts</a></li>
          </ul>

          <!--<a href="#" class="btn-book btn btn-secondary btn-sm menu-absolute">Enroll Now</a>-->

          <a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light" data-toggle="collapse" data-target="#main-navbar">
            <span></span>
          </a>

        </div>
      </div>
    </div>
  </nav>


  <div class="untree_co-hero overlay" style="background-image: url('{{asset("storage/photos/CcH58lpIOjahUNc6gFECm8w3ldBBNjuMcTXJylay.jpg")}}');">


    <div class="container">
      <div class="row align-items-center justify-content-center">

        <div class="col-12">

          <div class="row justify-content-center ">

            <div class="col-lg-6 text-center ">
              <!--<a href="#" href="https://vimeo.com/342333493" data-fancybox data-aos="fade-up" data-aos-delay="0" class="caption mb-4 d-inline-block">Watch the video</a>-->

              <h1 class="mb-4 heading text-white" data-aos="fade-up" data-aos-delay="100">L'élevage joue un rôle important dans l'économie du Sénégal.</h1>
              <p class="mb-0" data-aos="fade-up" data-aos-delay="300"><a href="#" class="btn btn-secondary">Explore courses</a></p>

            </div>


          </div>

        </div>

      </div> <!-- /.row -->
    </div> <!-- /.container -->

  </div> <!-- /.untree_co-hero -->


  <div class="services-section">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-4 mb-5 mb-lg-0">

          <div class="section-title mb-3" data-aos="fade-up" data-aos-delay="0">
            <h2 class="line-bottom mb-4">Devenez Un Eleveur</h2>
          </div>

          <p data-aos="fade-up" data-aos-delay="100">Elevez Vos moutons grâce aux confort que notre application vous offre.</p>

          <ul class="ul-check list-unstyled mb-5 primary" data-aos="fade-up" data-aos-delay="200">
            <li>Securité.</li>
            <li>Vente.</li>
            <li>Gestion.</li>
          </ul>

          <p data-aos="fade-up" data-aos-delay="300"><a href="{{route('login')}}" class="btn btn-primary">Commencez maintenant</a></p>

        </div>
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
          <figure class="img-wrap-2">
            <img src="{{asset('storage/images/mouton1.webp')}}" alt="Image" class="img-fluid">
            <div class="dotted"></div>
          </figure>

        </div>
      </div>
    </div>
  </div>



  <div class="untree_co-section bg-light">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
          <h2 class="line-bottom text-center mb-4">Les vrais Races de moutons</h2>
          <p>Des Races de Haut niveau qui procure à son propriétaire un sentiment de supèriorité</p>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="custom-media">
            <a href="#"><img src="{{asset('storage/images/mouton2.webp')}}" alt="Image" class="img-fluid"></a>
            <div class="custom-media-body">
              <div class="d-flex justify-content-between pb-3">
                <div class="text-primary"><span class="uil uil-book-open"></span> <span>43 merinos</span></div>
                <div class="review"><span class="icon-star"></span> <span>4.8</span></div>
              </div>
              <h3>Merinos</h3>
              <p class="mb-4">Lorem ipsum dolor sit amet once is consectetur adipisicing elit optio.</p>
              <div class="border-top d-flex justify-content-between pt-3 mt-3 align-items-center">
                <div><span class="price">300.000 francs</span></div>
                <div><a href="{{route('moutons.index')}}">Plus de Details</a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="custom-media">
            <a href="#"><img src="{{asset('storage/images/mouton3.webp')}}" alt="Image" class="img-fluid"></a>
            <div class="custom-media-body">
              <div class="d-flex justify-content-between pb-3">
                <div class="text-primary"><span class="uil uil-book-open"></span> <span>43 Bali-Bali</span></div>
                <div class="review"><span class="icon-star"></span> <span>4.8</span></div>
              </div>
              <h3>Bali-Bali</h3>
              <p class="mb-4">Lorem ipsum dolor sit amet once is consectetur adipisicing elit optio.</p>
              <div class="border-top d-flex justify-content-between pt-3 mt-3 align-items-center">
                <div><span class="price">500.000 francs</span></div>
                <div><a href="{{route('moutons.index')}}">Plus de Details</a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="custom-media">
            <a href="#"><img src="{{asset('storage/images/mouton4.webp')}}" alt="Image" class="img-fluid"></a>
            <div class="custom-media-body">
              <div class="d-flex justify-content-between pb-3">
                <div class="text-primary"><span class="uil uil-book-open"></span> <span>43 ladoum</span></div>
                <div class="review"><span class="icon-star"></span> <span>4.8</span></div>
              </div>
              <h3>Ladoum</h3>
              <p class="mb-4">Lorem ipsum dolor sit amet once is consectetur adipisicing elit optio.</p>
              <div class="border-top d-flex justify-content-between pt-3 mt-3 align-items-center">
                <div><span class="price">1.000.000 francs</span></div>
                <div><a href="{{route('moutons.index')}}">Plus de Details</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="untree_co-section pt-0 bg-img overlay" style="background-image: url('{{asset("storage/photos/CcH58lpIOjahUNc6gFECm8w3ldBBNjuMcTXJylay.jpg")}}');">
    <div class="container">
      <div class="row align-items-center justify-content-center text-center">
        <div class="col-lg-7">
          <h2 class="text-white mb-3" data-aos="fade-up" data-aos-delay="0">L'Elevage Pour une Economie prospère au Sénégal</h2>
          <p class="text-white h5 mb-4" data-aos="fade-up" data-aos-delay="100">Accroitre l'économie Sénégalaise avec les moutons élevés avec Amour.</p>
          <p><a href="{{route('login')}}" class="btn btn-secondary" data-aos="fade-up" data-aos-delay="200">Participez maintenant</a></p>
        </div>
      </div>
    </div>
  </div> <!-- /.untree_co-section -->

  <div class="untree_co-section">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-5 mb-5">
          <h2 class="line-bottom mb-4" data-aos="fade-up" data-aos-delay="0">A Propos de Nous</h2>
          <p data-aos="fade-up" data-aos-delay="100">Chez Khar-bi.com, nous puisons dans notre riche héritage et notre expertise avérée pour offrir des services d'assistance exceptionnels, guidant nos clients à travers les défis et au-delà des frontières conventionnelles.</p>
          <ul class="list-unstyled ul-check mb-5 primary" data-aos="fade-up" data-aos-delay="200">
            <li>Vente de Moutons en trés bonne santé</li>
            <li>Gestion d'une Bergerie</li>
            <li>Plateforme Accessible pour tout utilisateur</li>
          </ul>

          <div class="row count-numbers mb-5">
            <div class="col-4 col-lg-4" data-aos="fade-up" data-aos-delay="0">
              <span class="counter d-block"><span data-number="12023">0</span><span>+</span></span>
              <span class="caption-2">No. de Moutons</span>
            </div>
            <div class="col-4 col-lg-4" data-aos="fade-up" data-aos-delay="100">
              <span class="counter d-block"><span data-number="49">0</span><span></span></span>
              <span class="caption-2">No. d'Eleveurs'</span>
            </div>
            <div class="col-4 col-lg-4" data-aos="fade-up" data-aos-delay="100">
              <span class="counter d-block"><span data-number="12">0</span><span></span></span>
              <span class="caption-2">No. de points</span>
            </div>
          </div>

          <p data-aos="fade-up" data-aos-delay="200">
            <a href="#" class="btn btn-primary mr-1">Admission</a>
            <a href="#" class="btn btn-outline-primary">Learn More</a>
          </p>
        </div>
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
          <div class="bg-1"></div>
          <a href="" data-fancybox class="video-wrap">
            <span class="play-wrap"><span class="icon-play"></span></span>
            <img src="{{asset('storage/images/mouton5.webp')}}" alt="Image" class="img-fluid rounded">
          </a>
        </div>
      </div>
    </div>
  </div>


  <div class="untree_co-section bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 text-center mx-auto">

          <h3 class="line-bottom mb-4">Temoignages</h3>
          <div class="owl-carousel wide-slider-testimonial">
            <div class="item">
              <blockquote class="block-testimonial">

                <p>
                &ldquo;Cette Application est géniale quand on l'utilise, elle est dynamique rsponsive et attrayante.&rdquo;</p>
                <div class="author">
                  <img src="{{asset('storage/images/mbaye.jpeg')}}" alt="Free template by TemplateUX">
                  <h3>Mbaye NDAO</h3>
                  <p class="position">Mecanicien Automobile</p>
                </div>
              </blockquote>
            </div>

            <div class="item">
              <blockquote class="block-testimonial">

                <p>
                &ldquo;Cette application me facilite la vie en m'aidant avec le gestion de ma Bergerie... C'est fantastiques.&rdquo;</p>
                <div class="author">
                  <img src="{{asset('storage/images/saliou.jpeg')}}" alt="Free template by TemplateUX">
                  <h3>Saliou Sy</h3>
                  <p class="position">Electricien Automobile</p>
                </div>
              </blockquote>
            </div>

            <div class="item">
              <blockquote class="block-testimonial">

                <p>
                &ldquo;Achetez le mouton de ses rêves sans se deplacer, C'est vraiment cool!!!&rdquo;</p>
                <div class="author">
                  <img src="{{asset('storage/images/alou.jpeg')}}" alt="Free template by TemplateUX">
                  <h3>Alassane MBAO</h3>
                  <p class="position">Data-Base Administrator</p>
                </div>
              </blockquote>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>


  <div class="site-footer">


    <div class="container">

      <div class="row">
        <div class="col-lg-3 mr-auto">
          <div class="widget">
            <h3>A Propos de Nous<span class="text-primary">.</span> </h3>
            <p>Chez Khar-bi.com, nous puisons dans notre riche héritage et notre expertise avérée pour offrir des services d'assistance exceptionnels, guidant nos clients à travers les défis et au-delà des frontières conventionnelles.</p>
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
          <p class="copyright">Copyright &copy;<script>document.write(new Date().getFullYear());</script>. Tous les Droits sont Reservés. &mdash; Designed with love by <a href="">Serigne Cheikh NDAO</a>  Distributed By <a href="https://themewagon.com">ThemeWagon</a> <!-- License information: https://untree.co/license/ -->
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

    <script src="{{asset('storage/js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('storage/js/popper.min.js')}}"></script>
    <script src="{{asset('storage/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('storage/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('storage/js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{asset('storage/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('storage/js/jquery.fancybox.min.js')}}"></script>
    <script src="{{asset('storage/js/jquery.sticky.js')}}"></script>
    <script src="{{asset('storage/js/aos.js')}}"></script>
    <script src="{{asset('storage/js/custom.js')}}"></script>

  </body>

  </html>


