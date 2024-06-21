<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>SED - Community & Environmental Infrastrutures Project </title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="{{asset('App/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
        <link href="{{asset('App/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{asset('App/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{asset('App/css/style.css')}}" rel="stylesheet">
    </head>

    
    <body>




        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('App/lib/easing/easing.min.js')}}"></script>
        <script src="{{asset('App/lib/waypoints/waypoints.min.js')}}"></script>
        <script src="{{asset('App/lib/counterup/counterup.min.js')}}"></script>
        <script src="{{asset('App/lib/owlcarousel/owl.carousel.min.js')}}"></script>
        <script src="{{asset('App/lib/lightbox/js/lightbox.min.js')}}"></script>
        

        <!-- Template Javascript -->
        <script src="{{asset('App/js/main.js')}}"></script>

    </body>

</html>
  
<div class="container">
        <div class="row py-5">
            <div class="col-md-4"></div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <div class="card-title"><center><h3>Se Connecter</h3></center></div>
            @if(session()->has('error'))
                        <div class="alert alert-danger">{{ session()->get('error') }}</div>
    @endif
    @if(session()->has('success'))
                        <div class="alert alert-success">{{ session()->get('success') }}</div>
    @endif
              <form action="{{route('login')}}" method="post">
                @csrf
                @method('post')
     
            
        
            <div class="form-group">
                <label for="e_mail">E-mail :</label>
                <input type="text" class="form-control"  id="e_mail" name="email"  value="{{ old('email') }}">
                  @error('email')
                  <small id="emailHelp" class="form-text text-danger">
                      {{$message}}
                   </small> 
                 @enderror
            </div>
             <div class="form-group">
                <label for="e_mail">Mot de passe :</label>
                <input type="password" class="form-control"  id="e_mail" name="password"  value="{{ old('email') }}">
                  @error('password')
                  <small id="emailHelp" class="form-text text-danger">
                      {{$message}}
                   </small> 
                 @enderror
            </div>
            
        
      
        
          <button type="submit" class="btn-primary mt-5 w-100">Se connecter</button><br><br>
          <center><a href="/register">Je n'ai pas de compte</a></center>
        </form>
          </div>
        </div>
      </div>
      <div class="col-md-4"></div>
        </div>
      </div>