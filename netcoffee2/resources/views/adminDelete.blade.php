<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>NetCoffee</title>
    <link href="https://getbootstrap.com/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Pacifico&display=swap%27");
        .navbar-brand,
        .judul {
            font-family: "Pacifico", cursive;
        }
        
        .card-group {
            margin-bottom: 8rem;
        }
    </style>
</head>

<body>
    <!--Navbar bootstrap dark bg dark -->
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
                        @if(Auth::user())
                            <a class="nav-link active" href="{{route('logout')}}"><i class="bi bi-box-arrow-in-left"></i> Logout</a>
                        @else
                            <a class="nav-link active" href="{{route('login')}}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--navbar darknya-->
    <!-- carousel -->

    <!--Contents-->
    <h1 class=" judul display-5 text-center text-muted my-4 my-5">Admin Page</h1>
    
    
        <div class="card-header">
          <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
              <a class="nav-link" href="/adminPage">Input</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " aria-current="true" href="/adminUpdate">Update</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="/adminDelete">Delete</a>
            </li>
          </ul>
        </div>
        <div class="card-body">
          <h5 class="card-title text-center">Delete Content</h5>
          <div class="container mt-5 mb-5">
            <div class="row justify-content-center">
                <div class="card shadow" style="width: 80rem;">

                    <div class="card-body">

                    <form class="row g-4" action="/adminDelete" method="POST">
                    @csrf
                        <div class="col-md-6">
                            <label for="name" class="form-label">Name </label>
                            <input type="text" class="form-control" id="name" name= "name">
                        </div>

                        <div class="col-lg-12">
                          <input type="submit" value="DELETE">
                        </div>

                    </form>

                    </div>
                  </div>
            </div>
          </div>
          
        </div>
      

    <!--end of content-->

    <footer class="footer mt-auto bg-Light text-center text-white fixed-bottom " style="background-color: #876445">
        <!-- Copyright -->
        <div class="text-light text-center p-3">NetCoffee-2022</div>
    </footer>

    <!-- /Container-->
    <!-- JavaScript and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>