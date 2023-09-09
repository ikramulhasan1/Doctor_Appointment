<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="copyright" content="MACode ID, https://macodeid.com/">

    <title>One Health - Medical Center HTML5 Template</title>

    <link rel="stylesheet" href="../assets/css/maicons.css">

    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

    <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

    <link rel="stylesheet" href="../assets/css/theme.css">

    <!-- Extra Css -->
    <link rel="stylesheet" href="/assets/css/extra.css">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <!-- Back to top button -->
    <div class="back-to-top"></div>

    <header class="sticky-top bg-black">
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 text-sm">
                        <div class="site-info">
                            <a href="#" style="text-decoration: none;"><span class="text-primary mail"><i
                                        class="fa-solid fa-phone"></i></span>
                                +00
                                123 4455 6666</a>
                            <span class="divider">|</span>
                            <a href="#" style="text-decoration: none;"><span class="text-primary"><i
                                        class="fa-solid fa-envelope"></i></span>
                                mail@example.com</a>
                        </div>
                    </div>
                    <div class="col-sm-4 text-right text-sm">
                        <div class="social-mini-button">
                            <a href="#"><span class="mai-logo-facebook-f"></span></a>
                            <a href="#"><span class="mai-logo-twitter"></span></a>
                            <a href="#"><span class="mai-logo-dribbble"></span></a>
                            <a href="#"><span class="mai-logo-instagram"></span></a>
                        </div>
                    </div>
                </div> <!-- .row -->
            </div> <!-- .container -->
        </div> <!-- .topbar -->

        <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="#"><span class="text-white">One</span><span
                        class="text-success">-Health</span></a>

                <form action="#">
                    <div class="input-group input-navbar">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username"
                            aria-describedby="icon-addon1">
                    </div>
                </form>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport"
                    aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupport">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="doctors.html">Doctors</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blog.html">News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>

                        @if (Route::has('login'))
                            @auth
                                <x-app-layout>

                                </x-app-layout>
                            @else
                                <li class="nav-item">
                                    <a class="btn btn-primary ml-lg-3 rounded-0" href="{{ route('login') }}">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="btn btn-primary ml-lg-3 rounded-0"
                                        href="{{ route('register') }}">Register</a>
                                </li>

                            @endauth
                        @endif
                    </ul>
                </div> <!-- .navbar-collapse -->
            </div> <!-- .container -->
        </nav>
    </header>

    <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/bg_image_1.jpg);">
        <div class="hero-section">
            <div class="container text-center wow zoomIn">
                <span class="subhead">Let's make your life happier</span>
                <h1 class="display-4">Healthy Living</h1>
                <a href="#" class="btn btn-primary">Let's Consult</a>
            </div>
        </div>
    </div>


    <div class="bg-light">
        <div class="page-section py-3 mt-md-n5 custom-index">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-4 py-3 py-md-0">
                        <div class="card-service wow fadeInUp">
                            <div class="circle-shape bg-secondary text-white">
                                <span class="mai-chatbubbles-outline"></span>
                            </div>
                            <p><span>Chat</span> with a doctors</p>
                        </div>
                    </div>
                    <div class="col-md-4 py-3 py-md-0">
                        <div class="card-service wow fadeInUp">
                            <div class="circle-shape bg-primary text-white">
                                <span class="mai-shield-checkmark"></span>
                            </div>
                            <p><span>One</span>-Health Protection</p>
                        </div>
                    </div>
                    <div class="col-md-4 py-3 py-md-0">
                        <div class="card-service wow fadeInUp">
                            <div class="circle-shape bg-accent text-white">
                                <span class="mai-basket"></span>
                            </div>
                            <p><span>One</span>-Health Pharmacy</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- .page-section -->



        <div class="page-section pb-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 py-3 wow fadeInUp">
                        <h1>Welcome to Our Health <br> Center</h1>
                        <p class="text-grey mb-4">Welcome to Our Health Center! We are dedicated to
                            providing
                            high-quality healthcare services and promoting overall well-being for
                            our community.
                            Our mission is to ensure that you and your loved ones receive the best
                            possible care
                            in a welcoming and compassionate environment.

                            Here at Our Health Center, we offer a wide range of medical services to
                            meet your
                            healthcare needs. Our team of experienced and dedicated healthcare
                            professionals
                            includes doctors, nurses, specialists, and support staff who are
                            committed to
                            delivering personalized and patient-centered care.</p>
                        <a href="about.html" class="btn btn-primary">Read More</a>
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
                        <div class="img-place custom-img-1">
                            <img src="../assets/img/bg-doctor.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- .bg-light -->
    </div> <!-- .bg-light -->


    {{-- Doctor --}}
    @include('user.doctor')


    <!-- new Departments -->
    <div class="container ">
        <div class="d-flex justify-content-between align-items-end mb-2">

            <!-- home Title content -->
            <div>
                <h2>Departments</h2>
                <!-- home Title content -->
                <p>Select the Department you want and book it now in less than a minute.</p>
            </div>

            <!-- home Title content -->
            <div>
                <a href="http://themes.moses-clothing.com/Emantals/Departments" class="text-decoration-none">See all
                    <i class="fa-solid fa-circle-arrow-right"></i></a>
            </div>
        </div>

        <!--  -->
        <div class="row row-cols-1 row-cols-md-3 g-4">

            <div class="col">
                <div class="card">
                    <img src="../assets/img/departments/medicine.webp" class="card-img-top" alt="Medicine">
                    <div class="card-body">
                        <h5 class="card-title">General</h5>

                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="../assets/img/departments/cardiology.webp" class="card-img-top" alt="Medicine">
                    <div class="card-body">
                        <h5 class="card-title">Cardiology</h5>

                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="../assets/img/departments/neurology.webp" class="card-img-top" alt="Medicine">
                    <div class="card-body">
                        <h5 class="card-title">Neurology</h5>

                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="../assets/img/departments/dental.webp" class="card-img-top" alt="Medicine">
                    <div class="card-body">
                        <h5 class="card-title">Dental</h5>

                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="../assets/img/departments/orthopaedics.webp" class="card-img-top" alt="Medicine">
                    <div class="card-body">
                        <h5 class="card-title">Orthopaedics</h5>

                    </div>
                </div>
            </div>
        </div>

    </div>


    {{-- News --}}
    @include('user.latest')

    {{-- Appoinment --}}
    @include('user.appointment')


    <footer class="page-footer">
        <div class="container">
            <div class="row px-md-3">
                <div class="col-sm-6 col-lg-3 py-3">
                    <h5>Company</h5>
                    <ul class="footer-menu">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Career</a></li>
                        <li><a href="#">Editorial Team</a></li>
                        <li><a href="#">Protection</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3 py-3">
                    <h5>More</h5>
                    <ul class="footer-menu">
                        <li><a href="#">Terms & Condition</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Advertise</a></li>
                        <li><a href="#">Join as Doctors</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3 py-3">
                    <h5>Our partner</h5>
                    <ul class="footer-menu">
                        <li><a href="#">One-Fitness</a></li>
                        <li><a href="#">One-Drugs</a></li>
                        <li><a href="#">One-Live</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3 py-3">
                    <h5>Contact</h5>
                    <p class="footer-link mt-2">351 Willow Street Franklin, MA 02038</p>
                    <a href="#" class="footer-link">701-573-7582</a>
                    <a href="#" class="footer-link">healthcare@temporary.net</a>

                    <h5 class="mt-3">Social Media</h5>
                    <div class="footer-sosmed mt-3">
                        <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
                        <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
                        <a href="#" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
                        <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
                        <a href="#" target="_blank"><span class="mai-logo-linkedin"></span></a>
                    </div>
                </div>
            </div>

            <hr>

            <div class="d-flex justify-content-evenly ">
                <span>
                    <p id="copyright">Copyright &copy; 2023 <a class="text-decoration-none "
                            href="https://www.linkedin.com/in/theikramulhasan/" target="_blank">Ikramul
                            Hasan</a>. All right reserved</p>

                </span>
                <a href="">
                    <i class="fa-solid fa-landmark fs-3 me-1"></i>
                    <i class="fa-solid fa-money-check-dollar fs-3 me-1"></i>
                    <i class="fa-brands fa-paypal fs-3 me-1"></i>
                </a>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam, quasi non sint ab quod doloribus
                </p>
            </div>
            
            <p>Ki bolte chao tomi</p>
        </div>
    </footer>

    <script src="../assets/js/jquery-3.5.1.min.js"></script>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <script src="../assets/vendor/wow/wow.min.js"></script>

    <script src="../assets/js/theme.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>
