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
                        <a class="nav-link" href="/coffeeTools">Coffee Tools</a>
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
    <h1 class="judul display-5 text-center text-muted my-4 my-5">Coffee Tools</h1>
    <div class="card-group mx-5">
        <div class="card mx-3">
            <img src="img/1.jpg" class="img-fluid card-img-top rounded-left" alt="..." />
            <div class="card-body">
                <h5 class="card-title">Grinder</h5>
                <p class="card-text">
                    What is a coffee grinder machine? Dosing grinders are designed to collect the ground coffee into what we call the ground coffee container and then, with the pull of a handle, dispense it directly into your receptacle, such as a portafilter. The ground
                    coffee container looks like a pie that is cut into six equally shaped pieces called sections.
                </p>
            </div>
        </div>
        <div class="card mx-3">
            <img src="img/2.jpg" class="img-fluid card-img-top" alt="..." />
            <div class="card-body">
                <h5 class="card-title">Dripper</h5>
                <p class="card-text">
                    drip coffee is the product of a coffee maker automatically dripping water. Your involvement is confined to providing the raw materials and pressing play. With pour over you're the one pouring the water, controlling the flow, stirring your grinds, and
                    adjusting your filter.
                </p>
            </div>
        </div>
        <div class="card mx-3">
            <img src="img/7.jpg" class="img-fluid card-img-top rounded-right" alt="..." />
            <div class="card-body">
                <h5 class="card-title">Espresso Machine</h5>
                <p class="card-text">
                    An espresso machine brews coffee by forcing pressurized water near boiling point through a "puck" of ground coffee and a filter in order to produce a thick, concentrated coffee called espresso. The first machine for making espresso was built on the dawn
                    of the 1900s by Luigi Bezzera.The founder of the La Pavoni company bought the patent and from 1905 produced espresso machines commercially on a small scale in Milan. Multiple machine designs have been created to produce espresso. Several
                    machines share some common elements, such as a grouphead and a portafilter. An espresso machine may also have a steam wand which is used to steam and froth liquids (such as milk) for coffee drinks such as cappuccino and caffe latte.
                </p>
            </div>
        </div>
    </div>
    <!--end of content-->

    <footer class="footer mt-auto bg-Light text-center text-white fixed" style="background-color: #876445">
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