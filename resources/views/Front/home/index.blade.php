@extends('./front/layout/app')
@section('page-content')



        {{-- <!-- Spinner Start -->
        <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End --> --}}


        <!-- Navbar start -->
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
                            <a href="{{route('home')}}" class="nav-item nav-link active">Accueil</a>
                            <a href="{{route('about')}}" class="nav-item nav-link">A propos</a>
                            <a href="{{route('service')}}" class="nav-item nav-link">Services</a>
                            <a href="{{route('projet')}}" class="nav-item nav-link">Projets</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
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
        <!-- Navbar End -->


       <!-- Carousel Start -->
        <div class="container-fluid carousel-header vh-100 px-0">
            <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img src="{{asset('App/img/carousel-1.jpg')}}" class="img-fluid" alt="Image">
                        <div class="carousel-caption">
                            <div class="p-3" style="max-width: 900px;">
                                <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;"> Plateforme de Financement Participatif </h4>
                                <h1 class="display-1 text-capitalize text-white mb-4">Financement des Projets d'Infrastructures Communautaires</h1>
                                <p class="mb-5 fs-5">Se Mobiliser pour Promouvoir les Meilleurs Projets d'Infrastructures Communautaires</p>
                                <div class="d-flex align-items-center justify-content-center">
                                    <a class="btn-hover-bg btn btn-primary text-white py-3 px-5" href="Inscription.html">Rejoignez-nous</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('App/img/carousel-2.jpg')}}" class="img-fluid" alt="Image">
                        <div class="carousel-caption">
                            <div class="p-3" style="max-width: 900px;">
                                <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;"> Plateforme de Financement Participatif </h4>
                                <h1 class="display-1 text-capitalize text-white mb-4">Financement des Projets d'Infrastructures Communautaires</h1>
                                <p class="mb-5 fs-5">Se Mobiliser pour Promouvoir les Meilleurs Projets d'Infrastructures Communautaires</p>
                                <div class="d-flex align-items-center justify-content-center">
                                    <a class="btn-hover-bg btn btn-primary text-white py-3 px-5" href="Inscription.html">Rejoignez-nous</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('App/img/carousel-3.jpg')}}" class="img-fluid" alt="Image">
                        <div class="carousel-caption">
                            <div class="p-3" style="max-width: 900px;">
                                <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;"> Plateforme de Financement Participatif </h4>
                                <h1 class="display-1 text-capitalize text-white mb-4">Financement des Projets d'Infrastructures Communautaires</h1>
                                <p class="mb-5 fs-5">Se Mobiliser pour Promouvoir les Meilleurs Projets d'Infrastructures Communautaires</p>
                                <div class="d-flex align-items-center justify-content-center">
                                    <a class="btn-hover-bg btn btn-primary text-white py-3 px-5" href="Inscription.html">Rejoignez-nous</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Précédent</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Suivant</span>
                </button>
            </div>
        </div>
        <!-- Carousel End -->


        <!-- About Start -->
        <div class="container-fluid about  py-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-xl-5">
                        <div class="h-100">
                            <img src="{{asset('App/img/about-1.jpg')}}" class="img-fluid w-100 h-100" alt="Image">
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <h5 class="text-uppercase text-primary">A Propos de nous</h5>
                        <h1 class="mb-4">Notre objectif principal est de mobiliser des ressources financières et de soutenir les membres de la communauté. </h1>
                        <p class="fs-5 mb-4">Appropriation du développement local par la communauté</p>
                        <div class="tab-class bg-secondary p-4">
                            <ul class="nav d-flex mb-2">
                                <li class="nav-item mb-3">
                                    <a class="d-flex py-2 text-center bg-white active" data-bs-toggle="pill" href="#tab-1">
                                        <span class="text-dark" style="width: 150px;">A Propos</span>
                                    </a>
                                </li>
                                <li class="nav-item mb-3">
                                    <a class="d-flex py-2 mx-3 text-center bg-white" data-bs-toggle="pill" href="#tab-2">
                                        <span class="text-dark" style="width: 150px;">Missions</span>
                                    </a>
                                </li>
                                <li class="nav-item mb-3">
                                    <a class="d-flex py-2 text-center bg-white" data-bs-toggle="pill" href="#tab-3">
                                        <span class="text-dark" style="width: 150px;">Vision</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div id="tab-1" class="tab-pane fade show p-0 active">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="d-flex">
                                                <div class="text-start my-auto">
                                                    <h5 class="text-uppercase mb-3">Lorem Ipsum 1</h5>
                                                    <p class="mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has
                                                    </p>
                                                    <div class="d-flex align-items-center justify-content-start">
                                                        <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="#">En savoir plus</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-2" class="tab-pane fade show p-0">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="d-flex">
                                                <div class="text-start my-auto">
                                                    <h5 class="text-uppercase mb-3">Lorem Ipsum 2</h5>
                                                    <p class="mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has
                                                    </p>
                                                    <div class="d-flex align-items-center justify-content-start">
                                                        <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="#">En savoir plus</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-3" class="tab-pane fade show p-0">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="d-flex">
                                                <div class="text-start my-auto">
                                                    <h5 class="text-uppercase mb-3">Lorem Ipsum 3</h5>
                                                    <p class="mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has
                                                    </p>
                                                    <div class="d-flex align-items-center justify-content-start">
                                                        <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="#">En savoir plus</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Services Start -->
        <div class="container-fluid service py-5 bg-light">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5" style="max-width: 800px;">
                    <h5 class="text-uppercase text-primary">Nos missions</h5>
                    <h1 class="mb-0">Nos actions pour promouvoir les projets communautaires  </h1>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="service-item">
                            <img src="{{asset('App/img/service-1.jpg')}}" class="img-fluid w-100" alt="Image">
                            <div class="service-link">
                                <a href="#" class="h4 mb-0">Collecte des fonds pour aides communautaires</a>
                            </div>
                        </div>
                        <p class="my-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        </p>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="service-item">
                            <img src="{{asset('App/img/service-2.jpg')}}" class="img-fluid w-100" alt="Image">
                            <div class="service-link">
                                <a href="#" class="h4 mb-0"> Collaboration étroite avec les services</a>
                            </div>
                        </div>
                        <p class="my-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        </p>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="service-item">
                            <img src="{{asset('App/img/service-3.jpg')}}" class="img-fluid w-100" alt="Image">
                            <div class="service-link">
                                <a href="#" class="h4 mb-0">Visites guidées par des professionnels uniquement</a>
                            </div>
                        </div>
                        <p class="my-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        </p>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="service-item">
                            <img src="{{asset('App/img/service-4.jpg')}}" class="img-fluid w-100" alt="Image">
                            <div class="service-link">
                                <a href="#" class="h4 mb-0">Mise en place et accès à l'eau potable</a>
                            </div>
                        </div>
                        <p class="my-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        </p>
                    </div>
                    <div class="col-12">
                        <div class="d-flex align-items-center justify-content-center">
                            <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="#">En savoir plus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services End -->


        <!-- Donation Start -->
        <div class="container-fluid donation py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5" style="max-width: 800px;">
                    <h5 class="text-uppercase text-primary">Donations</h5>
                    <h1 class="mb-0">Votre contribution sera d'une grande aide pour la communauté</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4">
                        <div class="donation-item">
                            <img src="{{asset('App/img/donation-1.jpg')}}" class="img-fluid w-100" alt="Image">
                            <div class="donation-content d-flex flex-column">
                                <h5 class="text-uppercase text-primary mb-4">...</h5>
                                <a href="#" class="btn-hover-color display-6 text-white">Aidez-nous davantage</a>
                                <h4 class="text-white mb-4">Projet d'Infrastructure Communautaire </h4>
                                <p class="text-white mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                                <div class="donation-btn d-flex align-items-center justify-content-start">
                                    <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="contribution.html">Faites un don !</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="donation-item">
                            <img src="{{asset('App/img/service-2.jpg')}}" class="img-fluid w-100" alt="Image">
                            <div class="donation-content d-flex flex-column">
                                <h5 class="text-uppercase text-primary mb-4">Ecosystème</h5>
                                <a href="#" class="btn-hover-color display-6 text-white">Aidez-nous davantage</a>
                                <h4 class="text-white mb-4">Projet d'Infrastructure Communautaire </h4>
                                <p class="text-white mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                                <div class="donation-btn d-flex align-items-center justify-content-start">
                                    <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="contribution.html">Faites un don !</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="donation-item">
                            <img src="{{asset('App/img/donation-3.jpg')}}" class="img-fluid w-100" alt="Image">
                            <div class="donation-content d-flex flex-column">
                                <h5 class="text-uppercase text-primary mb-4">Recyclage</h5>
                                <a href="#" class="btn-hover-color display-6 text-white">Aidez-nous davantage</a>
                                <h4 class="text-white mb-4">Projet d'Infrastructure Communautaire </h4>
                                <p class="text-white mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                                <div class="donation-btn d-flex align-items-center justify-content-start">
                                    <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="contribution.html">Faites un don !</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex align-items-center justify-content-center">
                            <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="#">Tous les Dons</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Donation End -->


        <!-- Counter Start -->
        <div class="container-fluid counter py-5" style="background: linear-gradient(rgba(0, 0, 0, .4), rgba(0, 0, 0, 0.4)), url({{asset('App/img/volunteers-bg.jpg')}}) center center; background-size: cover;">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5" style="max-width: 800px;">
                    <h5 class="text-uppercase text-primary">Réalisations</h5>
                    <p class="text-white mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                    </p>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="counter-item text-center border p-5">
                            <i class="fas fa-route  fa-4x text-white"></i>
                            <h3 class="text-white my-4">Aménagement des Routes</h3>
                            <div class="counter-counting">
                                <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">3600</span>
                                <span class="h1 fw-bold text-primary">+</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="counter-item text-center border p-5">
                            <i class="fas fa-file-invoice-dollar fa-4x text-white"></i>
                            <h3 class="text-white my-4">Fonds Collectés</h3>
                            <div class="counter-counting text-center border-white w-100" style="border-style: dotted; font-size: 30px;">
                                <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">513</span>
                                <span class="h1 fw-bold text-primary">$</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="counter-item text-center border p-5">
                            <i class="fas fa-users fa-4x text-white"></i>
                            <h3 class="text-white my-4">Volontaires</h3>
                            <div class="counter-counting text-center border-white w-100" style="border-style: dotted; font-size: 30px;">
                                <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">713</span>
                                <span class="h1 fw-bold text-primary">+</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="counter-item text-center border p-5">
                            <i class="fas fa-heart fa-4x text-white"></i>
                            <h3 class="text-white my-4">Journées d'assistance</h3>
                            <div class="counter-counting text-center border-white w-100" style="border-style: dotted; font-size: 30px;">
                                <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">487</span>
                                <span class="h1 fw-bold text-primary">+</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex align-items-center justify-content-center">
                            <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="#">Rejoignez-nous</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Counter End -->


        <!-- Causes Start -->
        <div class="container-fluid causes py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5" style="max-width: 800px;">
                    <h5 class="text-uppercase text-primary">Projets Récents</h5>
                    <h1 class="mb-4">Notre société a besoin de notre contribution</h1>
                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                    </p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6 col-xl-3">
                        <div class="causes-item">
                            <div class="causes-img">
                                <img src="{{asset('App/img/causes-4.jpg')}}" class="img-fluid w-100" alt="Image">
                                <div class="causes-link pb-2 px-3">
                                    <small class="text-white"><i class="fas fa-chart-bar text-primary me-2"></i>Objectif: $3600</small>
                                    <small class="text-white"><i class="fa fa-thumbs-up text-primary me-2"></i>Relevé: $4000</small>
                                </div>
                                <div class="causes-dination p-2">
                                    <a class="btn-hover-bg btn btn-primary text-white py-2 px-3" href="contribution.html">Faites un Don</a>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                    <span>65%</span>
                                </div>
                            </div>
                            <div class="causes-content p-4">
                                <h4 class="mb-3">Premier projet de </h4>
                                <p class="mb-4">Notre société a besoin de notre contribution</p>
                                <a class="btn-hover-bg btn btn-primary text-white py-2 px-3" href="#">En savoir plus</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-3">
                        <div class="causes-item">
                            <div class="causes-img">
                                <img src="{{('App/img/causes-2.jpg')}}" class="img-fluid w-100" alt="Image">
                                <div class="causes-link pb-2 px-3">
                                    <small class="text-white"><i class="fas fa-chart-bar text-primary me-2"></i>Objectif: $3600</small>
                                    <small class="text-white"><i class="fa fa-thumbs-up text-primary me-2"></i>Relevé: $4000</small>
                                </div>
                                <div class="causes-dination p-2">
                                    <a class="btn-hover-bg btn btn-primary text-white py-2 px-3" href="contribution.html">Faites un Don</a>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                    <span>75%</span>
                                </div>
                            </div>
                            <div class="causes-content p-4">
                                <h4 class="mb-3">Construire un habitat pour les enfants en situatio défavorisés.</h4>
                                <p class="mb-4">Aidez aujourd'hui car demain vous serez peut-etre celui qui aura besoin d'aide !</p>
                                <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="#">En savoir plus</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-3">
                        <div class="causes-item">
                            <div class="causes-img">
                                <img src="{{asset('App/img/causes-3.jpg')}}" class="img-fluid w-100" alt="Image">
                                <div class="causes-link pb-2 px-3">
                                    <small class="text-white"><i class="fas fa-chart-bar text-primary me-2"></i>Objectif: $3600</small>
                                    <small class="text-white"><i class="fa fa-thumbs-up text-primary me-2"></i>Relevé: $4000</small>
                                </div>
                                <div class="causes-dination p-2">
                                    <a class="btn-hover-bg btn btn-primary text-white py-2 px-3" href="contribution.html">Faites un Don</a>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                    <span>85%</span>
                                </div>
                            </div>
                            <div class="causes-content p-4">
                                <h4 class="mb-3">Construction d'un système d'eau potable pour les populations rurales pauvres.</h4>
                                <p class="mb-4">Aidez aujourd'hui car demain vous serez peut-etre celui qui aura besoin d'aide !</p>
                                <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="#">En savoir plus</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-3">
                        <div class="causes-item">
                            <div class="causes-img">
                                <img src="{{asset('App/img/causes-1.jpg')}}" class="img-fluid w-100" alt="Image">
                                <div class="causes-link pb-2 px-3">
                                    <small class="text-white"><i class="fas fa-chart-bar text-primary me-2"></i>Objectif: $3600</small>
                                    <small class="text-white"><i class="fa fa-thumbs-up text-primary me-2"></i>Relevé: $4000</small>
                                </div>
                                <div class="causes-dination p-2">
                                    <a class="btn-hover-bg btn btn-primary text-white py-2 px-3" href="contribution.html">Faites un Don</a>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                                    <span>95%</span>
                                </div>
                            </div>
                            <div class="causes-content p-4">
                                <h4 class="mb-3">Première activité environnnementale.</h4>
                                <p class="mb-4">Aidez aujourd'hui car demain vous serez peut-etre celui qui aura besoin d'aide !</p>
                                <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="#">En savoir plus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Causes End -->



        <!-- Volunteers Start -->
        <div class="container-fluid volunteer py-5 mt-5">
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
                        <h5 class="text-uppercase text-primary">Devenir un Volontaire?</h5>
                        <h1 class="mb-4">Joignez vous à nous pour une vie meilleure et épanouie.</h1>
                        <p class="mb-4">Lorem ipsum dolor sit amet consectur adip sed eiusmod amet consectur adip sed eiusmod tempor amet consectur adip sed eiusmod amet consectur adip sed eiusmod tempor amet consectur adip sed eiusmod amet consectur adip sed eiusmod tempor.
                        </p>
                        <p class="text-dark"><i class=" fa fa-check text-primary me-2"></i> Nous sommes amis les uns pour les autres.</p>
                        <p class="text-dark"><i class=" fa fa-check text-primary me-2"></i> Si vous nous rejoignez,nous vous accordons une formation gratuite.</p>
                        <p class="text-dark"><i class=" fa fa-check text-primary me-2"></i> C'est une opportunité d'aider les actes communautaires.</p>
                        <p class="text-dark"><i class=" fa fa-check text-primary me-2"></i> Aucune exigence en matière d'objectifs.</p>
                        <p class="text-dark mb-5"><i class=" fa fa-check text-primary me-2"></i> ..</p>
                        <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="Inscription.html">Rejoignez-nous</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Volunteers End -->

        <!-- Footer Start -->
@endsection
