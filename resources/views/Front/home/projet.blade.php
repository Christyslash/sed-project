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
                            <a href="{{route('projet')}}" class="nav-item nav-link active">Projets</a>
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
 <div class="container-fluid bg-breadcrumb">
     @if(session()->has('success'))
                        <div class="alert alert-success">{{ session()->get('success') }}</div>
    @endif
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4">Projets Récents </h1>
                <p class="fs-5 text-white mb-4">Notre société a besoin de notre contribution</p>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-white">Projets</li>
                </ol>
            </div>
        </div>
        <!-- Header End -->

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
                    @foreach ($projet as $item)

                    <div class="col-lg-6 col-xl-3">
                        <div class="causes-item">
                            <div class="causes-img">
                                <img src="{{asset($item->cover_image)}}" class="img-fluid w-100" alt="Image">
                                <div class="causes-link pb-2 px-3">
                                    <small class="text-white"><i class="fas fa-chart-bar text-primary me-2"></i>Objectif: XOF {{$item->jackpot}}</small>
                                    <small class="text-white"><i class="fa fa-thumbs-up text-primary me-2"></i>Relevé: $4000</small>
                                </div>
                                <div class="causes-dination p-2">
                                    <a class="btn-hover-bg btn btn-primary text-white py-2 px-3" href="#">Faites un Don</a>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                    <span>65%</span>
                                </div>
                            </div>
                            <div class="causes-content p-4">
                                <h4 class="mb-3">{{$item->title}}</h4>
                                <p class="mb-4">Aidez aujourd'hui car demain vous serez peut-etre celui qui aura besoin d'aide !<</p>
                                <a class="btn-hover-bg btn btn-primary text-white py-2 px-3" href="#">En savoir plus</a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
                <div class="d-flex justify-content-between">
                    <a href="/projects/new" class="btn btn-primary">Creer un projet</a>
                    <a href="/contribution" class="btn btn-primary">Contribuer à un projet</a>

                </div>
            </div>
        </div>

@endsection
