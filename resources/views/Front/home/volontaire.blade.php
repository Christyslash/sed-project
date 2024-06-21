@extends('./front/layout/app')
@section('page-content')
  <div class="container-fluid fixed-top px-0">
            <div class="container px-0">
                <div class="topbar">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-8">
                            <div class="topbar-info d-flex flex-wrap">
                                <a href="#" class="text-light me-4"><i class="fas fa-envelope text-white me-2"></i>SED@gmail.com</a>
                                <a href="#" class="text-light"><i class="fas fa-phone-alt text-white me-2"></i>+229 66006060</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="topbar-icon d-flex align-items-center justify-content-end">
                                <a href="#" class="btn-square text-white me-2"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="btn-square text-white me-2"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="btn-square text-white me-2"><i class="fab fa-instagram"></i></a>
                                <a href="#" class="btn-square text-white me-2"><i class="fab fa-pinterest"></i></a>
                                <a href="#" class="btn-square text-white me-0"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-light bg-light navbar-expand-xl">
                    <a href="index.html" class="navbar-brand ms-3">
                        <h1 class="text-primary display-5">SED</h1>
                    </a>
                    <button class="navbar-toggler py-2 px-3 me-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars text-primary"></span>
                    </button>
                    <div class="collapse navbar-collapse bg-light" id="navbarCollapse">
                        <div class="navbar-nav ms-auto">
                            <a href="{{route('home')}}" class="nav-item nav-link ">Accueil</a>
                            <a href="{{route('about')}}" class="nav-item nav-link">A propos</a>
                            <a href="{{route('service')}}" class="nav-item nav-link">Services</a>
                            <a href="{{route('projet')}}" class="nav-item nav-link">Projets</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Pages</a>
                                <div class="dropdown-menu m-0 bg-secondary rounded-0">
                                    <a href="{{route('volontaire')}}" class="dropdown-item">Volontaires</a>
                                    <a href="{{route('dons')}}" class="dropdown-item">Donations</a>
                                </div>
                            </div>
                            <a href="{{route('contact')}}" class="nav-item nav-link">Contact</a>
                        </div>
                        <div class="d-flex align-items-center flex-nowrap pt-xl-0" style="margin-left: 15px;">
                            <a href="{{route('contribution')}}" class="btn-hover-bg btn btn-primary text-white py-2 px-4 me-3">Faites un Don</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
 <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4">Nos Volontaires</h1>
                <p class="fs-5 text-white mb-4">Aidez aujourd'hui car demain vous serez peut-etre celui qui aura besoin d'aide !</p>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-white">Volontaires</li>
                </ol>
            </div>
        </div>
        <!-- Header End -->

        <!-- Volunteers Start -->
        <div class="container-fluid volunteer py-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-5">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="volunteer-img">
                                    <img src="{{asset('App/img/volunteers-1.jpg')}}" class="img-fluid w-100" alt="Image">
                                    <div class="volunteer-title">
                                        <h5 class="mb-2 text-white">Michel Brown</h5>
                                        <p class="mb-0 text-white">Communicator</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="volunteer-img">
                                    <img src="{{asset('App/img/volunteers-3.jpg')}}" class="img-fluid w-100" alt="Image">
                                    <div class="volunteer-title">
                                        <h5 class="mb-2 text-white">Michel Brown</h5>
                                        <p class="mb-0 text-white">Communicator</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="volunteer-img">
                                    <img src="{{asset('App/img/volunteers-2.jpg')}}" class="img-fluid w-100" alt="Image">
                                    <div class="volunteer-title">
                                        <h5 class="mb-2 text-white">Michel Brown</h5>
                                        <p class="mb-0 text-white">Communicator</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="volunteer-img">
                                    <img src="{{asset('App/img/volunteers-4.jpg')}}" class="img-fluid w-100" alt="Image">
                                    <div class="volunteer-title">
                                        <h5 class="mb-2 text-white">Michel Brown</h5>
                                        <p class="mb-0 text-white">Communicator</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <h5 class="text-uppercase text-primary"> Devenir un Volontaire? </h5>
                        <h1 class="mb-4">Joignez vous à nous pour une vie meilleure et épanouie.</h1>
                        <p class="mb-4">Lorem ipsum dolor sit amet consectur adip sed eiusmod amet consectur adip sed eiusmod tempor amet consectur adip sed eiusmod amet consectur adip sed eiusmod tempor amet consectur adip sed eiusmod amet consectur adip sed eiusmod tempor.
                        </p>
                        <p class="text-dark"><i class=" fa fa-check text-primary me-2"></i> Nous sommes amis les uns pour les autres.</p>
                        <p class="text-dark"><i class=" fa fa-check text-primary me-2"></i> Si vous nous rejoignez,nous vous accordons une formation gratuite.</p>
                        <p class="text-dark"><i class=" fa fa-check text-primary me-2"></i> C'est une opportunité d'aider les actes communautaires.</p>
                        <p class="text-dark"><i class=" fa fa-check text-primary me-2"></i> Aucune exigence en matière d'objectifs.</p>
                        <p class="text-dark mb-5"><i class=" fa fa-check text-primary me-2"></i> ..</p>
                        <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="#">Rejoignez-nous</a>
                    </div>
                </div>
            </div>
        </div>
@endsection
