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

    <!--Contents-->
    <h1 class=" judul display-5 text-center text-muted my-4 my-5">Coffee Variants</h1>
    <div class="card-group mx-5">
        <div class="card mx-3">
            <img src="img/4.jpg" class=" img-fluid card-img-top rounded-left" alt="...">
            <div class="card-body">
                <h5 class="card-title">Kintamani</h5>
                <p class="card-text">Bali Kintamani coffee has taste characteristics that are very different from other coffees in Indonesia. There is a fresh sour taste like the taste of citrus fruits but does not leave a trace (aftertaste) in the mouth. In addition, coffee
                    beans emit a very strong and sweet aroma.</p>
            </div>
        </div>
        <div class="card mx-3">
            <img src="img/5.jpg" class=" img-fluid  card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Arabica Wamena</h5>
                <p class="card-text">Papua Wamena coffee is famous for having a balanced and smooth taste. The aroma produced is brown and floral, which is quite fragrant, medium body, moderate sweetness, and low acidity. In addition, this type also produces a flavor note
                    that tends to be earthy with a herbal sensation and a smokey aftertaste..</p>

            </div>
        </div>
        <div class="card mx-3">
            <img src="img/6.jpg" class=" img-fluid  card-img-top rounded-right" alt="...">
            <div class="card-body">
                <h5 class="card-title">Gayo Sumatera</h5>
                <p class="card-text">Gayo Sumatera Coffe taste Sweetly and distinctively crisp, layered complexity. Caramel, peach, wisteria, cacao nib, a hint of moist, fresh-fallen leaves in aroma and cup. Deep, vibrant acidity; lightly syrupy mouthfeel. Moist leaves, cacao
                    nib and a hint of flowers together carry into a gentle finish.</p>

            </div>
        </div>
        
        @foreach($coffeedata as $cd)
        <div class="card mx-3">
            <img src="{{Storage::url($cd->img)}}" class=" img-fluid card-img-top rounded-left" alt=""  width="500px" height="300px">
            <div class="card-body">
                <h5 class="card-title">{{$cd->name}}</h5>
                <p class="card-text">{{$cd->text}}</p>
            </div>
        </div>
        @endforeach
    </div>
    </div>
    <!--end of content-->

    <footer class="footer mt-auto bg-Light text-center text-white fixed " style="background-color: #876445">
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