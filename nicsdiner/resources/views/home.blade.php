<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="icon" href="assets/images/nicsdinerlogo.ico" type="image/x-icon">

    <title>Nic's Diner</title>

    <!-- CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl-carousel.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
</head>
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- Logo -->
                        <a href="#top" class="logo">
                            <img src="assets/images/nicsdiner.png" width="160px" height="80px">
                            <a class="menu-trigger">
                                <span>Menu</span>
                            </a>
                        </a>
                        <!-- EndLogo -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">About</a></li>

                            <li class="scroll-to-section"><a href="#menu">Menu</a></li>
                            <li class="scroll-to-section"><a href="#galleryz">Gallery</a></li>
                            <li class="scroll-to-section">
                                <a href="#testimony">Testimony</a>
                            </li>
                            <li class="scroll-to-section"><a href="#reservation">Contact Us</a></li>


                            <li class="scroll-to-section">
                                @auth
                                    <a href="{{ url('/showcart', Auth::user()->id) }}">
                                        Cart [{{ $count }}]
                                    </a>
                                @endauth
                            </li>

                            <li class="hide">
                                @if (Route::has('login'))
                                    <div>
                                        @auth </div>
                                <li class="">
                                    <x-app-layout>
                                    </x-app-layout>
                                </li>
                                @else
                                <li class="submenu">
                                    <a href="javascript:;">Profile</a>
                                    <ul>
                                        <li> <a href="{{ route('login') }}"
                                                class="text-sm text-gray-700 dark:text-gray-500 underline">Login</a></li>

                                        @if (Route::has('register'))
                                            <li> <a href="{{ route('register') }}"
                                                    class="text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                            </li>
                                    </ul>
                                </li>
                                @endif
                            @endauth
                            </li>
                        </ul>
                </div>
                @endif
                </li>
                </ul>
                <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div id="top">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-4">
                    <div class="left-content">
                        <div class="inner-content">
                            <h4>Nic's Diner</h4><br>
                            <h6>Cheapest Foods Ever</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="main-banner header-text">
                        <div class="Modern-Slider">
                            <!-- Item -->
                            <div class="item">
                                <div class="img-fill">
                                    <img src="assets/images/ayam.jpg" alt="">
                                </div>
                            </div>
                            <!-- // Item -->
                            <!-- Item -->
                            <div class="item">
                                <div class="img-fill">
                                    <img src="assets/images/nasgor.jpg" alt="">
                                </div>
                            </div>
                            <!-- // Item -->
                            <!-- Item -->
                            <div class="item">
                                <div class="img-fill">
                                    <img src="assets/images/kwetiau.jpg" alt="">
                                </div>
                            </div>
                            <!-- // Item -->
                            <!-- Item -->
                            <div class="item">
                                <div class="img-fill">
                                    <img src="assets/images/mie.jpg" alt="">
                                </div>
                            </div>
                            <!-- // Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** About Area Starts ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>About Us</h6>
                            <h2>Nic’s Diner Deserves The Best Quality of Indonesian Cuisine</h2>
                        </div>
                        <p>When you are hungry, that means you need us. <br>
                            Nic’s Diner will give you the best price for Indonesian food and healthy nutrition to gives
                            the best taste and fill your stomach.
                            <br><br>
                        </p>
                        <div class="row">
                            <div class="col-4">
                                <img src="assets/images/ayam.png" alt="">
                            </div>
                            <div class="col-4">
                                <img src="assets/images/nasgor.png" alt="">
                            </div>
                            <div class="col-4">
                                <img src="assets/images/kwetiau.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="right-content">
                        <div class="thumb">
                            <a rel="nofollow" href="https://youtu.be/iHTZROwSGCE"><i class="fa fa-play"></i></a>
                            <img src="assets/images/uc.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Area Ends ***** -->




    <!-- ***** Menu Area Ends ***** -->
    @include('food')
    <!-- ***** Menu Area Ends ***** -->



    <!-- ***** Gallery Area Starts ***** -->

    @include('gallery')

    <!-- ***** Gallery Area Ends ***** -->

    <!-- ***** Order Now Area Starts ***** -->
    <section class="section" id="reservation">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>Contact Us</h6>
                            <h2>If you have any question, you can contact us!</h2>
                        </div>
                        <p>Before you order, make sure you are ordering on the right day on the availability of products
                        </p>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="phone">
                                    <i class="fa fa-phone"></i>
                                    <h4>Phone Numbers</h4>
                                    <span><a
                                            href="https://wa.me/6285932241057/?text=Hai%20Saya%20mau%20Order">+62859-3224-1057</a></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="message">
                                    <i class="fa fa-envelope"></i>
                                    <h4>Line</h4>
                                    <span><a href="http://line.me/ti/p/~nickd25">nickd25</a><br></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ***** Order Now Ends ***** -->

    <!-- ***** Menu Area Starts ***** -->
    <section class="section" id="offers">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6>Testimony</h6>
                        <h2>This is Nic's Diner<br>Customers Said</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row" id="tabs">
                        <div class="col-lg-12">
                            <div class="heading-tabs">
                                <div class="row">
                                    <div class="col-lg-6 offset-lg-3">
                                        <ul>
                                            <li><a href='#testimony' id="testimony"><img src="assets/images/tab-icon-01.png"
                                                        alt="">Testimony!!</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mx-auto">
                        <div class="col-lg-12">
                            <section class='tabs-content'>
                                <form action="{{ url('/addtestimony') }}" method="POST" enctype="multipart/form-data"
                                class="content-center; right: -400px;">
                                @csrf

                                <div class="pb-2">
                                    <input style="color:#000" type="text" name="name" placeholder="Name" required>
                                </div>
                                
                                <textarea
                                name="comment"
                                placeholder="{{ __('Testimony (Max 100 Character)') }}"
                                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                            ></textarea>
        
        
                                <div class="pb-10 pt-2">
                                    <button
                                        class="bg-orange-700 hover:bg-yellow-300 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow justify-items-center"><input
                                            style="color:#fff" type="submit" value="Save"></button>
                                </div>
                            </form>
                        <br>

                            <table style="background: #dcdcdc; border-radius: 15px; padding-right:50px; padding-left:50px" class="rounded-md">
                                <tr>
                                    <th style="padding: 30px">Name</th>
                                    <th style="padding: 30px">Comment</th>
                                </tr>
        
        
                                @foreach ($testimonydata as $data)
                                <tr align="center">
                                    <td style="padding-bottom: 30px">{{$data->name}}</td>
                                    <td style="padding-bottom: 30px; padding-right:30px">{{$data->comment}}</td>
                                </tr>
                                @endforeach
                            </table>
                            </section>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Chefs Area Ends ***** -->

    @include('footer')

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/isotope.js"></script>

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script>
        $(function() {
            var selectedClass = "";
            $("p").click(function() {
                selectedClass = $(this).attr("data-rel");
                $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("." + selectedClass).fadeOut();
                setTimeout(function() {
                    $("." + selectedClass).fadeIn();
                    $("#portfolio").fadeTo(50, 1);
                }, 500);

            });
        });
    </script>
</body>

</html>