<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>{{config('app.name')}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Insurance Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
    SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="{{asset('frontend/templates/corporate/css/bootstrap.css')}}" type="text/css" rel="stylesheet" media="all">
    <link href="{{asset('frontend/templates/corporate/css/style.css')}}" type="text/css" rel="stylesheet" media="all">
    <!-- how it works -->
    <link href="{{asset('frontend/templates/corporate/css/timeline.css')}}" type="text/css" rel="stylesheet" media="all">
    <!-- grid hover -->
    <link href="{{asset('frontend/templates/corporate/css/hover.css')}}" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="{{asset('frontend/templates/corporate/css/fontawesome-all.min.css')}}" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- //online-fonts -->
</head>

<body>
    <!-- banner -->
    <div class="banner" id="home">
        <!-- header -->
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-gradient-secondary">
                <h1>
                    <a class="navbar-brand text-white" href="{{url('/')}}">
                        {{config('app.name')}}
                    </a>
                </h1>
                <button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-lg-auto text-center">
                        <!-- <li class="nav-item active  mr-lg-3 mt-lg-0 mt-3">
                            <a class="nav-link" href="{{url('/')}}">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item  mr-lg-3 mt-lg-0 mt-3">
                            <a class="nav-link scroll" href="#about">about</a>
                        </li>
                        <li class="nav-item dropdown mr-lg-3 mt-lg-0 mt-3">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Dropdown
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item scroll" href="#work">our work</a>
                                <a class="dropdown-item scroll" href="#testi">testimonials</a>
                                <div class="dropdown-divider"></div>
                            </div>
                        </li>
                        <li class="nav-item mr-lg-3 mt-lg-0 mt-3">
                            <a class="nav-link scroll" href="#contact">Contact</a>
                        </li> -->
                        <li>
                            <button type="button" class="btn  ml-lg-2 w3ls-btn" data-toggle="modal" aria-pressed="false"
                                data-target="#exampleModal">
                                <i class="far fa-user-circle" style="font-size: 15px"></i> Members Login
                            </button>
                        </li>
                    </ul>
                </div>

            </nav>
        </header>
        <!-- //header -->
        <div class="container">
            <div class="banner-text">
                <div class="slider-info">
                    <h3>Non Schedule Flight Permits</h3>
                    <p class="text-white mt-sm-4 mt-2">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                    <a class="btn btn-primary mt-4 agile-link-bnr scroll" href="#about" role="button">View
                        More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- //banner -->
    <!-- about -->
    <div class="about-w3sec py-sm-5" id="about">
        <div class="container py-5">
            <div class="title-section pb-4">
                <h3 class="main-title-agile">you are in good hands</h3>
                <span class="title-line">
                </span>
            </div>
            <div class="ins-sec1">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="abt-block mb-lg-0 mb-5">
                            <div class="serv_abs serv_bottom">
                                <i class="fas fa-home"></i>
                            </div>
                            <h3>Landing permission</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 my-lg-0 my-md-5">
                        <div class="abt-block">
                            <div class="serv_abs serv_bottom">
                                <i class="fas fa-car"></i>
                            </div>
                            <h3>Overfly Permisson</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>                    
                </div>                
            </div>
        </div>
    </div>
    <!-- //about -->
    
    
    <!-- how it works -->
    <div class="agile-works py-5" id="work">
        <div class="container py-lg-5">
            <div class="title-section pb-4">
                <h3 class="main-title-agile">how it works?</h3>
                <span class="title-line">
                </span>
            </div>
            <div class="row py-md-5 pt-5">
                <div class="col-md-12">
                    <div class="main-timeline2">
                        <div class="timeline">
                            <span class="icon fa fa-globe"></span>
                            <a href="#" class="timeline-content">
                                <h3 class="title">heading goes here</h3>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada tellus
                                    lorem, et condimentum neque commodo quis.
                                </p>
                            </a>
                        </div>
                        <div class="timeline">
                            <span class="icon fa fa-rocket"></span>
                            <a href="#" class="timeline-content">
                                <h3 class="title">heading goes here</h3>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada tellus
                                    lorem, et condimentum neque commodo quis.
                                </p>
                            </a>
                        </div>
                        <div class="timeline">
                            <span class="icon fa fa-briefcase"></span>
                            <a href="#" class="timeline-content">
                                <h3 class="title">heading goes here</h3>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada tellus
                                    lorem, et condimentum neque commodo quis.
                                </p>
                            </a>
                        </div>
                        <div class="timeline">
                            <span class="icon fa fa-mobile"></span>
                            <a href="#" class="timeline-content">
                                <h3 class="title">heading goes here</h3>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada tellus
                                    lorem, et condimentum neque commodo quis.
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //how it works -->
    <!-- testimonials -->
    <div class="testimonials py-lg-5" id="testi">
        <div class="container py-5">
            <div class="title-section pb-4">
                <h3 class="main-title-agile text-white">what people say about us.</h3>
                <span class="title-line bg-light">
                </span>
            </div>
            <div class="text-center py-lg-5">
                <div class="callbacks_container">
                    <ul class="rslides" id="slider3">
                        <li>
                            <div class="testi-agile">
                                <p>
                                    <i class="fas fa-quote-left"></i>Vivamus magna justo, lacinia eget consectetur
                                    sed,
                                    convallis at tellus. Nulla
                                    quis lorem ut libero malesuada feugiat.Nulla quis lorem ut libero malesuada
                                    feugiat.
                                    Donec rutrum congue leo eget malesuada. Lorem ipsum dolor sit amet, consectetur
                                    adipiscing
                                    elit.
                                    <i class="fas fa-quote-right"></i>
                                </p>
                            </div>
                            <div class="testi-pos">
                                <img src="{{asset('frontend/templates/corporate/images/ts1.jpg')}}" alt="" class="img-fluid rounded-circle mb-3" />
                                <h4>arim john</h4>
                                <span>congue leo</span>
                            </div>
                        </li>
                        <li>

                            <div class="testi-agile">
                                <p>
                                    <i class="fas fa-quote-left"></i>Donec rutrum congue leo eget consectetur sed,
                                    convallis at tellus. Nulla quis
                                    lorem ut libero malesuada feugiat.Nulla quis lorem ut libero malesuada feugiat.
                                    Donec
                                    rutrum congue leo eget malesuada. Lorem ipsum dolor sit amet, consectetur
                                    adipiscing
                                    elit
                                    <i class="fas fa-quote-right"></i>
                                </p>
                            </div>
                            <div class="testi-pos">
                                <img src="{{asset('frontend/templates/corporate/images/ts2.jpg')}}" alt="" class="img-fluid rounded-circle mb-3" />
                                <h4>john arim</h4>
                                <span>lacinia eget</span>
                            </div>
                        </li>
                        <li>
                            <div class="testi-agile">
                                <p>
                                    <i class="fas fa-quote-left"></i>Vivamus magna justo, lacinia eget consectetur
                                    sed,
                                    convallis at tellus. Nulla
                                    quis lorem ut libero malesuada feugiat.Nulla quis lorem ut libero malesuada
                                    feugiat.
                                    Donec rutrum congue leo eget malesuada. Lorem ipsum dolor sit amet, consectetur
                                    adipiscing
                                    elit
                                    <i class="fas fa-quote-right"></i>
                                </p>
                            </div>
                            <div class="testi-pos">
                                <img src="{{asset('frontend/templates/corporate/images/ts3.jpg')}}" alt="" class="img-fluid rounded-circle mb-3" />
                                <h4>john arim</h4>
                                <span>Donec rutru</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- //testimonials -->
    <!-- contact -->
    <div class="contact-wthree" id="contact">
        <div class="container py-sm-5">
            <div class="title-section py-4">
                <h3 class="main-title-agile">contact us</h3>
                <span class="title-line">
                </span>
            </div>
            <div class="row py-lg-5 py-4">
                <div class="col-lg-4">
                    <div class="agile-contact-top">
                        <h4>get in touch </h4>
                        <p>48 Kemal Ataturk Avenue Banani, Dhaka</p>
                    </div>
                    <hr>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>                    

                </div>
                <div class="offset-2"></div>
                <div class="col-lg-6 mt-lg-0 mt-5">
                    <!-- register form grid -->
                    <div class="register-top1">
                        <form action="#" method="get" class="register-wthree">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>
                                            First name
                                        </label>
                                        <input class="form-control" type="text" placeholder="Johnson" name="email"
                                            required="">
                                    </div>
                                    <div class="col-md-6 mt-md-0 mt-4">
                                        <label>
                                            Last name
                                        </label>
                                        <input class="form-control" type="text" placeholder="Kc" name="name" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>
                                            Mobile
                                        </label>
                                        <input class="form-control" type="text" placeholder="xxxx xxxxx" name="email"
                                            required="">
                                    </div>
                                    <div class="col-md-6 mt-md-0 mt-4">
                                        <label>
                                            Email
                                        </label>
                                        <input class="form-control" type="email" placeholder="example@email.com" name="email"
                                            required="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>
                                            Your message
                                        </label>
                                        <textarea placeholder="Type your message here" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-agile btn-block w-100 font-weight-bold text-uppercase">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--  //register form grid ends here -->
                </div>
            </div>
        </div>
    </div>
    
    <div class="cpy-right">
        <p>© 2018 {{config('app.name')}}. All rights reserved | Design by
            <a href="http://w3layouts.com"> W3layouts.</a>
        </p>
    </div>
    <!-- login  -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Members Login Form</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form  action="{{url('login')}}" method="post" class="p-3">

                        {{ csrf_field() }}
                        
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Username</label>
                            <input type="text" class="form-control" placeholder=" " name="email" id="recipient-name"
                                required="">
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-form-label">Password</label>
                            <input type="password" class="form-control" placeholder=" " name="password" id="password"
                                required="">
                        </div>
                        <div class="right-w3l">
                            <input type="submit" class="form-control" value="Login">
                        </div>
                        <div class="row sub-w3l my-3">
                            <div class="col sub-agile">
                                <input type="checkbox" id="brand1" value="">
                                <label for="brand1" class="text-white">
                                    <span></span>Remember me?</label>
                            </div>
                            <div class="col forgot-w3l text-right">
                                <a href="#" class="text-white">Forgot Password?</a>
                            </div>
                        </div>                        
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- //login -->    
    <!-- js -->
    <script src="{{asset('frontend/templates/corporate/js/jquery-2.2.3.min.js')}}"></script>
    <!-- //js -->
    <!-- testimonials  Responsiveslides -->
    <script src="{{asset('frontend/templates/corporate/js/responsiveslides.min.js')}}"></script>
    <script>
        // You can also use"$(window).load(function() {"
        $(function () {
            // Slideshow 4
            $("#slider3").responsiveSlides({
                auto: true,
                pager: true,
                nav: false,
                speed: 500,
                namespace: "callbacks",
                before: function () {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function () {
                    $('.events').append("<li>after event fired.</li>");
                }
            });

        });
    </script>
    <!-- //testimonials  Responsiveslides -->
    <!-- start-smooth-scrolling -->
    <script src="{{asset('frontend/templates/corporate/js/move-top.js')}}"></script>
    <script src="{{asset('frontend/templates/corporate/js/easing.js')}}"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function () {
            /*
            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
            };
            */
            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <script src="{{asset('frontend/templates/corporate/js/SmoothScroll.min.js')}}"></script>
    <!-- //smooth-scrolling-of-move-up -->
    <script src="{{asset('frontend/templates/corporate/js/counter.js')}}"></script>
    <!-- //stats -->
    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{asset('frontend/templates/corporate/js/bootstrap.js')}}"></script>
</body>

</html>