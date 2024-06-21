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
<br><br><br><br>

 <div class="container-fluid py-5">
                <div >
                    <div class="row align-items-center justify-content-center">

                        <div class="col-md-4">
                             <div class="card">
                        <div class="card-body">
                          <div class="card-title"><center><h3>Creer un Projet</h3></center></div>
                             <form action="{{route('newproject')}}" method="post" enctype ="multipart/form-data">
                        @csrf
                        @method('post')
                         <div class="form-group">
                            <label for="nom_prenoms">Nom du Projet</label>
                            <input type="text" class="form-control"  id="e_mail" name="nom"  value="{{ old('nom') }}">

                            @error('nom')
                            <small id="emailHelp" class="form-text text-danger">
                                {{$message}}
                            </small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nom_prenoms">Categories</label>
                            <select name="cat" class="form-control">
                            @foreach ($categories as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                            </select>
                            @error('cat')
                            <small id="emailHelp" class="form-text text-danger">
                                {{$message}}
                            </small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nom_prenoms">Détails</label>
                            <input type="text" class="form-control"  id="e_mail" name="detail"  value="{{ old('detail') }}">

                            @error('detail')
                            <small id="emailHelp" class="form-text text-danger">
                                {{$message}}
                            </small>
                            @enderror
                        </div>
                         <div class="form-group">
                            <label for="nom_prenoms">Description</label>
                            <input type="text" class="form-control"  id="e_mail" name="desc"  value="{{ old('desc') }}">

                            @error('desc')
                            <small id="emailHelp" class="form-text text-danger">
                                {{$message}}
                            </small>
                            @enderror
                        </div>
                         <div class="form-group">
                            <label for="nom_prenoms">Jackpot</label>
                            <input type="text" class="form-control"  id="e_mail" name="jackpot"  value="{{ old('jackpot') }}">

                            @error('jackpot')
                            <small id="emailHelp" class="form-text text-danger">
                                {{$message}}
                            </small>
                            @enderror
                        </div>
                         <div class="form-group">
                            <label for="nom_prenoms">Image</label>
                            <input type="file" class="form-control"  id="e_mail" name="image"  value="{{ old('image') }}">

                            @error('image')
                            <small id="emailHelp" class="form-text text-danger">
                                {{$message}}
                            </small>
                            @enderror
                        </div>

                        <button type="submit" class="btn-primary mt-5 w-100">Valider</button>
                   </form>
                        </div>
        </div>
                        </div>
                    </div>
                </div>

            </div>

<div class="container">

        <div class="row py-5">
            <div class="col-md-4"></div>
      <div class="col-md-4">

      </div>
      <div class="col-md-4"></div>
        </div>
      </div>
@endsection
