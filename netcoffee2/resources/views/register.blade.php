<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>NetCoffee</title>
    <link href="https://getbootstrap.com/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Pacifico&display=swap');
      .navbar-brand{
            font-family: 'Pacifico',cursive;
        }

      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

  </head>

<body class="text-center">

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #876445">
        <div class="container">
            <a class="navbar-brand" href="{{route('home')}}">NetCoffee</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <ul class="navbar-nav">
                    <li class="nav-item ms-3">
                        <a class="nav-link active" href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> About coffee </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/coffeeVariant">Coffee Variant</a></li>
                            <li><a class="dropdown-item" href="/coffeeHistory">Coffee History</a></li>
                        </ul>
                    </li>
                    <li class="nav-item ms-2">
                        <a class="nav-link" href="/coffeeTools">Coffe Tools</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('login')}}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="d-flex justify-content-center align-items-center">   
        <form class="form-signin" method="POST">
            @csrf
            <h1 class="h3 mt-5 fw-normal p-5" style="color: #876445;">Create Account</h1>
                <div class="form-floating mb-1" style="width: 400px;">
                    <input type="text" name="name" class="form-control" id="floatingName" placeholder="Name">
                    <label for="floatingInput">Name</label>
                    @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div class="form-floating mb-1">
                    <input type="email" name="email" class="form-control" id="floatingInput" placeholder="Email">
                    <label for="floatingInput">Email address</label>
                    @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="form-floating mb-1">
                    <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                    @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                </div>
                <div class="form-floating">
                    <input type="password" name="password_confirmation" class="form-control" id="floatingPassword" placeholder="Password Confirmation">
                    <label for="floatingPassword">Password Confirmation</label>
                    @if ($errors->has('confirmPass'))
                            <span class="text-danger">{{ $errors->first('confirmPass') }}</span>
                    @endif
                </div>
            <button class="mt-4 btn btn-outline-dark" style="width: 250px;" type="submit" >Register</button>
        <p class="mt-4 mb-3 text-muted">&copy; NetCoffee</p>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
