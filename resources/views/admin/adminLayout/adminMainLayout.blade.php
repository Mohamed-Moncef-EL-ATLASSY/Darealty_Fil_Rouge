<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Darealty, the next world leading community for realtors and investors to buy and sell their estates">
    <meta name="author" content="Mohamed Moncef EL ATLASSY">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <title>Darealty</title>

</head>

<body class="bg-light my-3">
    <header class="p-3 text-white bg-white ">

        <nav class="navbar navbar-expand-md navbar-light fixed-top bg-white">
            <div class="container-fluid">
                <a href="#" class="navbar-brand d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <img src="{{ URL::asset('images/logo.png') }}" alt="Darealty" width="75" height="75"> </a>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse text-center" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route ('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route ('list') }}">List your property</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route ('find') }}">Find your property</a>
                        </li>
                    </ul>

                    <div class="d-flex justify-content-around">
                        <button type="button" class="btn btn-danger">Log Out</button>
                    </div>

                </div>
            </div>
        </nav>

    </header>

<div class="mt-5" style="background-color: rgba(0, 0, 0, 0.05);">

    @yield('content')

</div>

    <footer class="text-center text-lg-start bg-white text-muted ">
        <section class="p-4 border-bottom">
        </section>

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="fw-bold mb-4 text-dark">
                            <img src="{{ URL::asset('images/logo.png') }}" alt="Darealty" width="75" height="75"> </a> Darealty, 2021
                        </h6>
                        <p> Darealty is the next world leading community for realtors and investors to buy and sell their estates</p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">Socials</h6>
                            <p>
                                <i class="fab fa-facebook-square me-3"></i>
                                <i class="fab fa-twitter me-3"></i>
                                <i class="fab fa-instagram me-3"></i>
                                <i class="fab fa-linkedin me-3"></i>
                                <i class="fab fa-youtube me-3"></i>
                            </p>
                            <p>Darealty inc.</p>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                        <p><i class="fas fa-home me-3"></i>Casablanca, Morocco</p>
                        <p><i class="fas fa-envelope me-3"></i>darealty@gmail.com</p>
                        <p><i class="fas fa-phone me-3"></i>+212 6 54 64 49 51</p>
                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © Darealty
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->


</body>

</html>
