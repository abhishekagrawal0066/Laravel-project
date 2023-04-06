<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <form action="" method="POST">
                @csrf
                <div class="card-body p-5 text-center">
                    <div class="mb-md-5 mt-md-4 pb-5">
                    <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                    {{-- <p class="text-white-50 mb-5">Please enter your login and password!</p> --}}
                    <div class="form-outline form-white mb-4">
                            <label class="form-label" for="typeEmailX">Email</label>
                            <input type="email" name="email" id="typeEmailX" class="form-control form-control-lg" />
                            {{-- @error('email')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror --}}
                    </div>
                    <div class="form-outline form-white mb-4">
                            <label class="form-label" for="typePasswordX">Password</label>
                            <input type="password" name="password" id="typePasswordX" class="form-control form-control-lg" />
                            {{-- @error('password')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror --}}
                    </div>
                    <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>

                    <button class="btn btn-outline-light btn-lg px-5" name="submit" type="submit">Login</button>

                    {{-- <div class="d-flex justify-content-center text-center mt-4 pt-1">
                        <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                        <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                        <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                    </div> --}}

                    </div>

                    <div>
                    </div>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>