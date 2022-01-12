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
        .navbar-brand {
            font-family: "Pacifico", cursive;
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
                        <a class="nav-link" href="/">Coffe Tools</a>
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
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/7.jpg" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
                <img src="img/2.jpg" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
                <img src="img/6.jpg" class="d-block w-100" alt="..." />
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- /carousel -->
    <!-- about every things coffe, beans, mach-->
    <div class="container pt-4">
        <div class="row">
            <div class="col-lg">
                <h3 class="mb-4">About Coffee</h3>
                <p>
                    Coffee is a brewed drink prepared from roasted coffee beans, the seeds of berries from certain flowering plants in the Coffea genus. From the coffee fruit, the seeds are separated to produce a stable, raw product: unroasted green coffee. The seeds are
                    then roasted, a process which transforms them into a consumable product: roasted coffee, which is ground into fine particles that are typically steeped in hot water before being filtered out, producing a cup of coffee.
                </p>
            </div>
            <div class="col-lg">
                <h3 class="mb-4">Coffee Beans</h3>
                <p>
                    A coffee bean is a seed of the Coffea plant and the source for coffee. It is the pip inside the red or purple fruit often referred to as a cherry. Just like ordinary cherries, the coffee fruit is also a so-called stone fruit. Even though the coffee beans
                    are not technically beans, they are referred to as such because of their resemblance to true beans. The fruits; cherries or berries, most commonly contain two stones with their flat sides together. A small percentage of cherries contain
                    a single seed, instead of the usual two. This is called a "peaberry". The peaberry occurs only between 10% and 15% of the time, and it is a fairly common belief that they have more flavour than normal coffee beans.Like Brazil nuts
                    and white rice, coffee beans consist mostly of endosperm.
                </p>
            </div>
            <div class="col-lg">
                <h3 class="mb-4">Coffee Tools</h3>
                <p>
                    One of an Essential things needed to make a coffe is a coffeemaker or coffee machine is a cooking appliance used to brew coffee. While there are many different types of coffeemakers using several different brewing principles, in the most common devices,
                    coffee grounds are placed into a paper or metal filter inside a funnel, which is set over a glass or ceramic coffee pot, a cooking pot in the kettle family. Cold water is poured into a separate chamber, which is then boiled and directed
                    into the funnel. This is also called automatic drip-brew.
                </p>
            </div>
        </div>
        <!-- /row -->
        <!-- Gatau apa ini -->

        <h1 class="display-3 text-center text-muted my-4">More Things about Coffee Addict</h1>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="card mb-3">
                    <img src="img/5.jpg" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h4 class="card-title">Coffee</h4>
                        <p class="card-text">Coffee Type</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card mb-3">
                    <img src="img/beans.jfif" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h4 class="card-title">Beans</h4>
                        <p class="card-text">Every Beans type</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card mb-3">
                    <img src="img/2.jpg" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h4 class="card-title">Coffee Tools</h4>
                        <p class="card-text">Equipments needed to make coffee.</p>
                    </div>
                </div>
            </div>

            <!--Buat grid nanti.-->
            <!-- Gatau apa-->
        </div>
    </div>
    <footer class="bg-Light text-center text-white" style="background-color: #876445">
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