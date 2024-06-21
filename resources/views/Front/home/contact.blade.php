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
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                                <div class="dropdown-menu m-0 bg-secondary rounded-0">
                                    <a href="{{route('volontaire')}}" class="dropdown-item">Volontaires</a>
                                    <a href="{{route('dons')}}" class="dropdown-item">Donations</a>
                                </div>
                            </div>
                            <a href="{{route('contact')}}" class="nav-item nav-link active">Contact</a>
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
                <h3 class="text-white display-3 mb-4">Contactez Nous</h1>
                <p class="fs-5 text-white mb-4">Aidez aujourd'hui car demain vous serez peut-etre celui qui aura besoin d'aide !</p>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-white">Contact</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->

        <!-- Contact Start -->
        <div class="container-fluid bg-light py-5">
            <div class="container py-5">
                <div class="contact p-5">
                    <div class="row g-4">
                        <div class="col-xl-5">
                            <h1 class="mb-4">Prendre contact</h1>
                            <p class="mb-4">Le formulaire contact est actuellement inactif. <a class="text-dark fw-bold" href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
                            <form>
                                <div class="row gx-4 gy-3">
                                    <div class="col-xl-6">
                                        <input type="text" class="form-control bg-white border-0 py-3 px-4" placeholder="Votre Prenom">
                                    </div>
                                    <div class="col-xl-6">
                                        <input type="email" class="form-control bg-white border-0 py-3 px-4" placeholder="Votre Email">
                                    </div>
                                    <div class="col-xl-6">
                                        <input type="text" class="form-control bg-white border-0 py-3 px-4" placeholder="Votre Telephone">
                                    </div>
                                    <div class="col-xl-6">
                                        <input type="text" class="form-control bg-white border-0 py-3 px-4" placeholder="Subject">
                                    </div>
                                    <div class="col-12">
                                        <textarea class="form-control bg-white border-0 py-3 px-4" rows="7" cols="10" placeholder="Votre Message"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn-hover-bg btn btn-primary w-100 py-3 px-5" type="submit">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-xl-7">
                            <div>
                                <div class="row g-4">
                                    <div class="col-lg-4">
                                        <div class="bg-white p-4">
                                            <i class="fas fa-map-marker-alt fa-2x text-primary mb-2"></i>
                                            <h4>Adresse</h4>
                                            <p class="mb-0">Oueme, Porto-Novo Tokpota</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="bg-white p-4">
                                            <i class="fas fa-envelope fa-2x text-primary mb-2"></i>
                                            <h4>Notre Mail</h4>
                                            <p class="mb-0">SED@example.com</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="bg-white p-4">
                                            <i class="fa fa-phone-alt fa-2x text-primary mb-2"></i>
                                            <h4>Téléphone</h4>
                                            <p class="mb-0">+229 66006060</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <iframe class="w-100" style="height: 412px; margin-bottom: -6px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387191.33750346623!2d-73.97968099999999!3d40.6974881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1694259649153!5m2!1sen!2sbd" 
                                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection