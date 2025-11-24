<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Emasuite Restaurant</title>

    <!-- CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/templatemo-klassy-cafe.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/lightbox.css')}}">

    <!-- OwlCarousel CSS (CDN only) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
    integrity="sha512-iecdLmaskl7CVkqkXNQ/Z1srPv7lOy9C27hHQ+Xp8a4MxAQ5a+W6ZouH3RvhjoYSl2tstYGGV3+e23XJpNe4w==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />

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
                    <a href="index.html" class="logo">
                        <img src="assets/images/klassy-logo.png" alt="Klassy Cafe">
                    </a>
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                        <li class="scroll-to-section"><a href="#about">About</a></li>
                        <li class="scroll-to-section"><a href="#menu">Menu</a></li>
                        <li class="scroll-to-section"><a href="#chefs">Chefs</a></li>
                        <!-- <li class="scroll-to-section"><a href="#reservation">Contact Us</a></li> -->
                        <li class="scroll-to-section">
                            <a href="{{route('cartview.index')}}"><i class="fa-solid fa-cart-shopping"></i>
                                <sup class="text-danger"><b>{{ $cartView ?? 0 }}</b></sup>
                            </a>
                        </li>

                        @if (Route::has('login'))
                        @auth
                        <li><x-app-layout></x-app-layout></li>
                        @else
                        <li><a href="{{ route('login') }}">Log in</a></li>
                        @if (Route::has('register'))
                        <li><a href="{{ route('register') }}">Register</a></li>
                        @endif
                        @endauth
                        @endif
                    </ul>
                    <a class='menu-trigger'><span>Menu</span></a>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->

<!-- ***** Main Banner Area Start ***** -->
<div id="top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <div class="left-content">
                    <div class="inner-content">
                        <h4>Emasuite Restaurant</h4>
                        <h6>THE BEST EXPERIENCE</h6>
                        <div class="main-white-button scroll-to-section">
                            <a href="#reservation">Make A Reservation</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="main-banner header-text">
                    <div class="Modern-Slider">
                        <div class="item"><div class="img-fill"><img src="assets/images/slide-01.jpg" alt=""></div></div>
                        <div class="item"><div class="img-fill"><img src="assets/images/slide-02.jpg" alt=""></div></div>
                        <div class="item"><div class="img-fill"><img src="assets/images/slide-03.jpg" alt=""></div></div>
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
                        <h2>We Leave A Delicious Memory For You</h2>
                    </div>
                    <p>Klassy Cafe is one of the best <a href="https://templatemo.com/tag/restaurant" target="_blank" rel="sponsored">restaurant HTML templates</a>...</p>
                    <div class="row">
                        <div class="col-4"><img src="assets/images/about-thumb-01.jpg" alt=""></div>
                        <div class="col-4"><img src="assets/images/about-thumb-02.jpg" alt=""></div>
                        <div class="col-4"><img src="assets/images/about-thumb-03.jpg" alt=""></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12">
                <div class="right-content">
                    <div class="thumb">
                        <a rel="nofollow" href="http://youtube.com"><i class="fa fa-play"></i></a>
                        <img src="assets/images/about-video-bg.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** About Area Ends ***** -->

<!-- ***** Menu Area Starts ***** -->
<section class="section" id="menu">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="section-heading">
                    <h6>Our Menu</h6>
                    <h2>Our selection of cakes with quality taste</h2>
                </div>
            </div>
        </div>

        <!-- Normal horizontal slider -->
        <div class="menu-slider" style="display: flex; overflow-x: auto; gap: 20px; padding: 10px;">
            @foreach ($foods as $item)
            <div class="menu-card" style="flex: 0 0 300px; border: 1px solid #ddd; border-radius: 10px; overflow: hidden; background: #fff;">
                <div class="card-image" style="height: 200px; background-image: url('{{ asset('upload/posts/'.$item->image) }}'); background-size: cover; background-position: center;"></div>
                <div class="card-content" style="padding: 15px;">
                    <h4>{{ $item->title }}</h4>
                    <p>{{ $item->description }}</p>
                    <p><strong>Price: </strong>{{ $item->price }}</p>
                    <form action="{{ route('addtocart', $item->id) }}" method="POST">
                        @csrf
                        <input type="number" min="1" value="1" name="quantity" style="width: 60px; margin-bottom: 10px;">
                        <button type="submit" class="btn btn-primary btn-block">AddCart</button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ***** Menu Area Ends ***** -->

<!-- ***** Chefs Area Starts ***** -->
<section class="section" id="chefs">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4 text-center">
                <div class="section-heading">
                    <h6>Our Chefs</h6>
                    <h2>We offer the best ingredients for you</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="chef-item">
                    <div class="thumb">
                        <div class="overlay"></div>
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                        <img src="assets/images/chefs-01.jpg" alt="Chef #1">
                    </div>
                    <div class="down-content">
                        <h4>Randy Walker</h4>
                        <span>Pastry Chef</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="chef-item">
                    <div class="thumb">
                        <div class="overlay"></div>
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul>
                        <img src="assets/images/chefs-02.jpg" alt="Chef #2">
                    </div>
                    <div class="down-content">
                        <h4>David Martin</h4>
                        <span>Cookie Chef</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="chef-item">
                    <div class="thumb">
                        <div class="overlay"></div>
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google"></i></a></li>
                        </ul>
                        <img src="assets/images/chefs-03.jpg" alt="Chef #3">
                    </div>
                    <div class="down-content">
                        <h4>Peter Perkson</h4>
                        <span>Pancake Chef</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Chefs Area Ends ***** -->

<!-- ***** Footer Start ***** -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-xs-12">
                <div class="right-text-content">
                    <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="logo">
                    <a href="index.html"><img src="assets/images/white-logo.png" alt=""></a>
                </div>
            </div>
            <div class="col-lg-4 col-xs-12">
                <div class="left-text-content">
                    <p>© Copyright Klassy Cafe Co.<br>Design: TemplateMo</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<<!-- jQuery -->
<script src="assets/js/jquery-2.1.0.min.js"></script>
<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- Plugins -->
<script src="assets/js/accordions.js"></script>
<script src="assets/js/datepicker.js"></script>
<script src="assets/js/scrollreveal.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/imgfix.min.js"></script>
<script src="assets/js/slick.js"></script>
<script src="assets/js/lightbox.js"></script>
<script src="assets/js/isotope.js"></script>

<!-- OwlCarousel JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<!-- Global Init -->
<script src="assets/js/custom.js"></script>

<script>
$(document).ready(function(){

    // Portfolio filter (optional)
    $("p").click(function(){
        var selectedClass = $(this).attr("data-rel");
        $("#portfolio").fadeTo(50, 0.1);
        $("#portfolio div").not("." + selectedClass).fadeOut();
        setTimeout(function(){
            $("." + selectedClass).fadeIn();
            $("#portfolio").fadeTo(50, 1);
        }, 500);
    });

    // Menu Carousel Initialization (if not in custom.js)
    if ($('.owl-menu-item').length) {
        $('.owl-menu-item').owlCarousel({
            loop: false,
            margin: 10,
            nav: true,
            dots: true,
            items: 3,
            rewind: true,
            autoplay: false,
            responsive:{
                0:{items:1},
                600:{items:2},
                1000:{items:3}
            }
        });
    }

    // Modern Slider (Main Banner)
    if ($('.Modern-Slider').length) {
        $('.Modern-Slider').slick({
            autoplay:true,
            autoplaySpeed:5000,
            speed:600,
            slidesToShow:1,
            slidesToScroll:1,
            fade:true,
            cssEase:'linear',
            arrows:true
        });
    }

});
</script>

</body>
</html>
